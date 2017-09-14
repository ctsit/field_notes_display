# REDCap Field Notes Display
Provides alternative display modes for field notes. A display mode can be specified by setting `@FIELD-NOTES-DISPLAY` action tag.

## Prerequisites
- [REDCap Modules](https://github.com/vanderbilt/redcap-external-modules)

## Installation
- Clone this repo into to `<redcap-root>/modules/field_notes_display_v1.0`.
- Go to **Control Center > Manage External Modules** and enable Field Notes Display.
- For each project you want to use this module, go to the project home page, click on **Manage External Modules** link, and then enable Field Notes Display for that project.

## @FIELD-NOTES-DISPLAY action tag
This [action tag](https://wiki.chpc.utah.edu/pages/viewpage.action?pageId=595001400) accepts the following inputs:
- `hover`: Displays text it when the field is hovered over.
- `tooltip`: Places a help icon, which displays the text in a tooltip when hovered over.
- `popover`: Places a help icon, which displays the text in a popover when clicked.
