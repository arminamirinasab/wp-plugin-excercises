jQuery(document).ready(function ($) {
  // Change plugin menu color picker
  $("input[type=color]").wpColorPicker();
  // Using CodeMirror
  $(".code").each(function () {
    wp.codeEditor.initialize(this);
  });
});
