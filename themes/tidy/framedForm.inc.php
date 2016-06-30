<style type="text/css">
   /* Make room for the mini-form */
   /* html body { margin-top: 60px; } */
   
   /* Reset all styles */
   #include * {
      text-align: left;
      border: 0; padding: 0; margin: 0;
      font: 12px Verdana,Arial,Tahoma;
      color: #eee;
      font-weight: normal;
      background: transparent;
      text-decoration: none;
      display: inline;
   }
   #include p {
      margin: 4px 0 0 10px;
      display: block;
   }
   #include b {
      font-weight: bold;
   }
   #include script {
      display:none;
   }
   
   /* Style the mini-form div */
   #include {
      border-top: 3px solid #ce6c1c;
      border-bottom: 3px solid #ce6c1c;
      background: #0b1933;
      position: absolute;
      top:0; left:0;
      width: 100%;
      height: 50px;
      z-index: 100000;
   }
   
   /* Mini-form elements */
   #include a {
      color: #ce6c1c;
   }
   #include a:hover {
      color: #ccc;
   }
   #include .url-input {
      padding: 2px;
      background: #eee;
      color: #111;
      border: 1px solid #ccc;
   }
   #include .url-input:focus {
      background: #fff;
      border: 1px solid #ce6c1c;
   }
   #include .url-button {
      font-weight: bold;
      border-style: outset;
      font-size: 11px;
      line-height: 10px;
   }
   #include_show_button {
    position: absolute !important;
    top: 8px !important;
    z-index: 1 !important;
    left: 8px;
}
</style>
<script type="text/javascript">
function toggleDisplay()
{
    var d = document.getElementById("include");
    var s = document.getElementById("include_show_button");
    if(d.style.display=="none")
    {
        s.style.display = "none";
        d.style.display = "block";
    }
    else
    {
        s.style.display = "block";
        d.style.display = "none";
    }
}
</script>

<div id="include_show_button" style="display:block;">
    <a href="javascript:toggleDisplay()">
        <img width="32" height="32" src="data:image/png;base64,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6wJ4lf037/ff/cYbqg8eaLvvX2iQ+KFgbcORprV7NJ0CGmbaELXqB2u1ayFIUc/qRtuvt5N5PbONrbdjToJyglYbhBMEcV3RzOl6NoeRh6CucZxPCqrC4aQgiAVF7uriVw2f4cCgizq6l7QErrIEvqLRillZ1/SnVC+cL0bnt1g/s8JyIeUrk4pXppk9R33Uu06d+TylTkKt2OVTzutFAK+29UC7wdvvOcz7bjvEfYstf6kqDevblo0toIJDh+pdgO9DGNQ/mw2FLh0IR+A7TFEPfhhyWUCCXgewjrjloZwlbPhYbQkjiUXiS4/JOMPzPTwPJgON8CxSSYQEVwrKksv7d4uWgkvbtlgdyP7KUF48tWrOnll3p7KSU9TZvRep9/UT6mzjq5LddD0J4NuZBe6845D8K3cclvd7xpzMx25G5DA3B50OeAqwEDdBKUkQCoRzjEaWmY5Ea4u1EIchcSxIJwVx5PB8RaMdEHivHtJYGs2EYb9AZ5p9h7roLCPNCmQgsbkh17AxcKxsMr3UZ2uzEiunVt23zm9xqqz+fMBXqffxKdfQvQfXqwBeJQT2K8Ud+xq8uRdw91KH44dm2TfTJmmFtcNlDfghNCNBWfr0BxrlQRJDI5I4IjpthycKpO8hcERJhLEWZwyehCBQVMaR5xVbI8sodflW7o1eOJtvLm+xfH6bV1b7nKFeq89TH932qR23azZ38XoXwLcTAnPAYQXHl2a4ZaHF0YUOhxa7YiHxXKcdi+TYTe3g6adSFceG225MSJoSKk3lKqy1pIUhCkOs9O2ksDpNq2JSevnKej7s53J7re/WV/ru4oVte66qOE+dp3eJenaP4dpNSvlOvJYE8J8+V0SdPt6jvntwPvKZbyWyF0q6UUBjvhfFVWW9IsulAyGkNJm2eaHJMi2zSWaHWUkfGADb1IPcpx7oKVdx7d7Jjno9IaljHz51EOzya6uIy59X8+8vvwP4H/3cY4899thjjz322GOPPfbYY4899thjjz322GOPPfbYY4899thjj+uF/xcI7PXbl32ZYgAAACV0RVh0ZGF0ZTpjcmVhdGUAMjAxNS0wNy0yNVQyMTo0OTo1NiswODowMEsbOEQAAAAldEVYdGRhdGU6bW9kaWZ5ADIwMTAtMDQtMjZUMDA6MDA6MDArMDg6MDCgVTtdAAAATnRFWHRzb2Z0d2FyZQBJbWFnZU1hZ2ljayA2LjguOC0xMCBRMTYgeDg2XzY0IDIwMTUtMDctMTkgaHR0cDovL3d3dy5pbWFnZW1hZ2ljay5vcmcFDJw1AAAAGHRFWHRUaHVtYjo6RG9jdW1lbnQ6OlBhZ2VzADGn/7svAAAAGHRFWHRUaHVtYjo6SW1hZ2U6OkhlaWdodAAxMjhDfEGAAAAAF3RFWHRUaHVtYjo6SW1hZ2U6OldpZHRoADEyONCNEd0AAAAZdEVYdFRodW1iOjpNaW1ldHlwZQBpbWFnZS9wbmc/slZOAAAAF3RFWHRUaHVtYjo6TVRpbWUAMTI3MjIxMTIwMAkpDe8AAAATdEVYdFRodW1iOjpTaXplADE0LjhLQkLMSKBAAAAAVHRFWHRUaHVtYjo6VVJJAGZpbGU6Ly8vaG9tZS93d3dyb290L3d3dy5lYXN5aWNvbi5uZXQvY2RuLWltZy5lYXN5aWNvbi5jbi9zcmMvNjYvNjYwOC5wbmfED/QZAAAAAElFTkSuQmCC">
    </a>
</div>

<div id="include" style="display:none;">
<?php
// Print form using variables (saves repeatedly opening/closing PHP tags)
// Edit as if normal HTML but escape any dollar signs
echo <<<OUT
   <form action="{$proxy}/includes/process.php?action=update" target="_top" method="post" onsubmit="return updateLocation(this);">

      <p>
         
         <b>URL:</b>
         <input type="text" name="u" size="40" value="{$url}" class="url-input" style="width:50%;" />
         <input type="submit" value="Go" class="url-input url-button" />
         
         [<a href="{$proxy}/index.php" target="_top">home</a>]
         [<a href="{$proxy}/includes/process.php?action=clear-cookies&return={$return}" target="_top">clear cookies</a>]
         [<a href="#" onclick="toggleDisplay();">hide navigator</a>]
         
      </p>
      
      <p>
         <b>Options:</b>
OUT;

// Loop through the options and print with appropriate checkedness
foreach($toShow as $details) { 
   echo <<<OUT
         <input type="checkbox" name="{$details['name']}" id="{$details['name']}"{$details['checked']} />
         <label for="{$details['name']}">{$details['title']}</label>

OUT;
}
?>
      </p>
      
   </form>
</div>

<!--[proxied]-->
