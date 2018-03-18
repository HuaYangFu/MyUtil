function resetForm(form) {
   event.preventDefault();
   $(':input',form).not(':button, :submit, :reset, :hidden').val('').removeAttr('checked').removeAttr('selected');
   form.find('input:text, input:password, input:file, select, textarea').val('');
   form.find('input:radio, input:checkbox').removeAttr('checked').removeAttr('selected');
}

function validate(form){

}