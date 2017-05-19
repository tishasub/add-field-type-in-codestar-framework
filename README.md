# add-field-type-in-codestar-framework
In this tutorial I'm going to show you how to add custom field type in codestar framework. Here I am adding two field types one is custom-post-type and another date type. 
Its very easy to do. Simply Add this to your theme-framework fields folder.

Use Custom Post type field in metabox
<br/>
array(<br/>
    'id'             => 'your_metabox_id',<br/>
    'type'           => 'post_type',<br/>
    'title'          => esc_html__('Choose Your Band', 'cs'),<br/>
    'class'          => 'blog-post',<br/>
    'post_type'      => 'post',<br/>
    'show_post_ID'   => false,(If you want to show post id just make it true. )<br/>
    'default_option' => esc_html__('Select A post', 'cs'),<br/>
),<br/>
<br/>
Use Date type field in metabox<br/>
<br/>
array(<br/>
    'id'    => 'your_metabox_id',<br/>
    'type'  => 'date',<br/>
    'title' => esc_html__('Date', 'cs'),<br/>
    'attributes'    => array(<br/>
        'placeholder' => 'December 2, 1981'<br/>
    )<br/>
),<br/>

Happy Coding :)
