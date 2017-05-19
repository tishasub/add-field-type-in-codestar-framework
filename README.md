# add-field-type-in-codestar-framework
In this tutorial I'm going to show you how to add custom field type in codestar framework. Here I am adding two field types one is custom-post-type and another date type. 
Its very easy to do. Simply Add this to your theme-framework fields folder.

Use Custom Post type field in metabox
array(
    'id'             => 'your_metabox_id',
    'type'           => 'post_type',
    'title'          => esc_html__('Choose Your Band', 'cs'),
    'class'          => 'blog-post',
    'post_type'      => 'post',
    'show_post_ID'   => false,
    'default_option' => esc_html__('Select A post', 'cs'),
),

Use Date type field in metabox
array(
    'id'    => 'your_metabox_id',
    'type'  => 'date',
    'title' => esc_html__('Date', 'cs'),
    'attributes'    => array(
        'placeholder' => 'December 2, 1981'
    )
),

Happy Coding :)
