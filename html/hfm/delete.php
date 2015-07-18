<!DOCTYPE html>
<html>
<head>
<script type="text/javascript" src="javascript/jquery.js"></script>
<script type="text/javascript">
$(document).ready(function(){
  $("button").click(function(){
    $("p").before("<p>Hello world!</p>");
    $(".button").before("<p>Before\" button!</p>");
    
    $(".button").after("<li class=\"select\"> <select name=\"subtype2\" class=\"subtype2\"> <OPTION VALUE=\"Option1\">Option-I</OPTION> <OPTION VALUE=\"Option2\">Option-II</OPTION> <OPTION VALUE=\"Option3\">Option-III</OPTION> <OPTION VALUE=\"Option4\">Option-X</OPTION> </select> </li> ");

  });

});

</script>
</head>
<body>
<div id="content">

<ul class="pageitem">
  <li class="select">
    <select name="subtype1" class="subtype1">
      <OPTION VALUE="Option1">Option-I</OPTION>
      <OPTION VALUE="Option2">Option-II</OPTION>
      <OPTION VALUE="Option3">Option-III</OPTION>
      <OPTION VALUE="Option4">Option-X</OPTION>
    </select>
  </li>

  <p>This is a paragraph.</p>

  <li class="button">
    <input name="submit" type="submit" value="Continue" />
  </li>

</ul>



<button>Insert content before each p element</button>


</div>

</body>
</html>
