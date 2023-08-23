# UI Patterns

Define and expose self-contained UI patterns as Drupal plugins and use them
seamlessly as drop-in templates for [panels](https://www.drupal.org/project/panels)
, views, view modes and field templates.

The UI Patterns module also integrates with with tools like [PatternLab](http://patternlab.io/)
or modules like [Component Libraries](https://www.drupal.org/project/components)
thanks to [definition overrides](https://www.drupal.org/docs/contributed-modules/ui-patterns/define-your-patterns#s-override-patterns-behavior).

## Project overview

The UI Patterns project provides 6 modules:

- **UI Patterns**: the main module, it exposes the UI Patterns system APIs and it does not do much more than that.
- **UI Patterns Library**: allows to define patterns via YAML and generates a pattern library page available at `/patterns`
  to be used as documentation for content editors or as a showcase for business. Use this module if you don't plan to
  use more advanced component library systems such as PatternLab or Fractal.
  [Learn more](https://www.drupal.org/docs/contributed-modules/ui-patterns/define-your-patterns)
- **UI Patterns Layouts**: allows to use patterns as layouts. This allows patterns on view modes
  with Field Layout or on [panels](https://www.drupal.org/project/panels)
  out of the box. [Learn more](https://www.drupal.org/docs/contributed-modules/ui-patterns/use-patterns-as-layouts)
- **UI Patterns Views**: allows to use patterns as Views row templates.
  [Learn more](https://www.drupal.org/docs/contributed-modules/ui-patterns/use-patterns-with-views)

## Try it out!

Download and install the [Bootstrap Patterns](https://github.com/nuvoleweb/bootstrap_patterns) theme on a vanilla Drupal
8 installation to quickly try out the UI Patterns module.

## Documentation

Documentation is available [here](https://www.drupal.org/docs/contributed-modules/ui-patterns).
