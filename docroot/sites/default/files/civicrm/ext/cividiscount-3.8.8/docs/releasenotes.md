## Information

Releases use the following numbering system:
**{major}.{minor}.{incremental}**

* major: Major refactoring or rewrite - make sure you read and test very carefully!
* minor: Breaking change in some circumstances, or a new feature. Read carefully and make sure you understand the impact of the change.
* incremental: A "safe" change / improvement. Should *always* be safe to upgrade.

* **[BC]**: Items marked with [BC] indicate a breaking change that will require updates to your code if you are using that code in your extension.

## Release 3.8.8 (2023-07-10)

* [!287](https://lab.civicrm.org/extensions/cividiscount/-/merge_requests/287) - Correct discount tracking when multiple memberships
* [!276](https://lab.civicrm.org/extensions/cividiscount/-/merge_requests/276) - Fix contact_id assignment from participantId in URL
* [!285](https://lab.civicrm.org/extensions/cividiscount/-/merge_requests/285) - Fix broken 'any event' discount code
* [!287](https://lab.civicrm.org/extensions/cividiscount/-/merge_requests/287) - Replace JQueryUI icon sprites with Font Awesome
* [!291](https://lab.civicrm.org/extensions/cividiscount/-/merge_requests/291) - Don't show discounts on entity types that have no available discounts
* [!296](https://lab.civicrm.org/extensions/cividiscount/-/merge_requests/296) - Drop unused columns track and event_id from cividiscount_track
* [!295](https://lab.civicrm.org/extensions/cividiscount/-/merge_requests/295) - Move entity declarations to files and add unit test

## Release 3.8.7 (2022-11-28)

* [!281](https://lab.civicrm.org/extensions/cividiscount/-/merge_requests/281) - Mega metadata update
* [!280](https://lab.civicrm.org/extensions/cividiscount/-/merge_requests/280) - Fix PHP 8 error for Participant Change Selections
* [!278](https://lab.civicrm.org/extensions/cividiscount/-/merge_requests/278) - Added intval after += to resolve TypeError

## Release 3.8.6 (2022-09-16)


* [!274](https://lab.civicrm.org/extensions/cividiscount/-/merge_requests/274) - Fix [#291](https://lab.civicrm.org/extensions/cividiscount/-/issues/291) date column sorting.
* [!275](https://lab.civicrm.org/extensions/cividiscount/-/merge_requests/275) - For event multiple participants don't require payment details if all priceset amounts are zero (ie. 100% discount).

