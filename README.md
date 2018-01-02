# REDCap Field Notes Display
Provides alternative display modes for field notes. This module adds an action tag `@FIELD-NOTES-DISPLAY` that takes one of three parameters, `hover`, `tooltip`, or `popover` to determine how the field note should be displayed.

## Prerequisites
- [REDCap Modules](https://github.com/vanderbilt/redcap-external-modules)

## Installation
- Clone this repo into to `<redcap-root>/modules/field_notes_display_v<version_number>`.
- Go to **Control Center > Manage External Modules** and enable Field Notes Display.
- For each project you want to use this module, go to the project home page, click on **Manage External Modules** link, and then enable Field Notes Display for that project.


## How to use
Once the module is activated on a project, the @FIELD-NOTES-DISPLAY will be available in the action tag help text of the Online Designer. Add @FIELD-NOTES-DISPLAY to any field where you would like to display the field note using one of the three display modes.  Specify the display mode you would like to use as a parameter to the action tag.  Valid display modes are `hover`, `tooltip`, and `popover`.  Provide the content of the field note as usual.


### Example:
Add the following syntax in the Action Tags field, then the field_note is hidden from the view and it is shown on hover over the field name.

`@FIELD-NOTES-DISPLAY="hover"`

And similarly, if it is required to show the field_note only on the tooltip or popover, use `@FIELD-NOTES-DISPLAY="tooltip"` or `@FIELD-NOTES-DISPLAY="popover"` respectively.
