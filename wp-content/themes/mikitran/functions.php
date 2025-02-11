<?php
// Filter hook; ham chua tham so bat ky; ap dung voi apply_filter();
function change_copyright($output)
{
    $output = "Design by WordPress";
    return $output;
}
add_filter("mik_copyright", "change_copyright");

//Filter hook; boi dam key
function content_filter($content)
{
    $find = "dummy";
    $replacement = "<strong>dummy</strong>";
    $content = str_replace($find, $replacement, $content);
    return $content;
}
add_filter("the_content", "content_filter");

// Action Hook; ap dung cho do_action();-> gan neo
function say_hi()
{
    echo "<br><strong>Noi dung chen zo</strong>";
}
add_action("mik_before_content", "say_hi");
