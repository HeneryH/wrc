<div id='groups' style="display: none">
  <div class='crm-summary-row groups'>
    <div class='crm-label'>{ts}Groups{/ts}</div>
    <div class='crm-content'>
      <span id="load_groups" class="crm-button">show me<span>
    </div>
  </div>
</div>

{* 
var data={crmAPI entity='GroupContact' action='get' sequential=1 contact_id=$contactId};
to avoid creating javascript global variables, wrap them in an anonymous function and assign the parameters from smarty variables on the last line before
*}

{literal}
<style>
.groups .crm-label,#group_add li {cursor:pointer;}
</style>

<script>
(function(contact_id,data){

CRM.$(function($){
  if ($(".crm-contact_type_label").length == 0) {
    CRM.console('log', 'group2summary:', "Someone has changed the summary layout, groups can't be displayed properly");
    return;
  }
  $(".crm-contact_type_label").parent().parent().prepend($("#groups").html());
  $("#groups").remove();

  var groups=[];
  $.each(data.values, function(key) {
    groups.push(data.values[key].title);
  });
  $(".groups .crm-content").html(groups.join(","));

  $(".groups .crm-label").click(function(){
    CRM.api4('Group', 'get', {
      where: [["saved_search_id", "IS NULL"]]
    }).then(function(data) {
      var groups= "<ul id='group_add'>";
      $.each(data, function(key) {
        groups = groups + "<li data-id='"+data[key].id+"'>"+data[key].title+"</li>";
      });
      groups = groups + "<ul>";
      CRM.alert(groups, "{/literal}{ts}Add to a group{/ts}{literal}", "info", {expires:0});
      $("#group_add li").click(function(){
        var id = $(this).data("id");
        var name = $(this).html();

        CRM.api4('GroupContact', 'create', {
          values: {"group_id": id, "contact_id": contact_id}
        }).then(function(results) {
          CRM.status("Added to group " + name);

          // Update the groups on the summary tab
          var groups = $(".groups .crm-content").html();
          if (groups) {
            groups += ', ';
          }
          $(".groups .crm-content").html(groups + name);
        }, function(failure) {
          CRM.status("Cannot add to group: " + failure.error_message, 'error');
        });
      }); 
    }, function(failure) {
      CRM.console('log', 'group2summary failed to fetch groups', failure);
    });
  });

});

}
{/literal}
({$contactId},
{crmAPI entity='GroupContact' action='get' sequential=1 contact_id=$contactId}
));
</script>
