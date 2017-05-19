<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access pages directly.
/**
 *
 * Field: Post Type
 *
 * @since 1.0.0
 * @version 1.0.0
 *
 */
class CSFramework_Option_post_type extends CSFramework_Options {

  public function __construct( $field, $value = '', $unique = '' ) {
    parent::__construct( $field, $value, $unique );
  }

  public function output() {

    echo $this->element_before();

    if( isset( $this->field['post_type'] ) ) {

      $post_type  = $this->field['post_type'];
      $class      = $this->element_class();
      $show_post_ID = "";
      
      // WP_Query arguments
      $args = array (
        'post_type'              => array( $post_type ),
        'post_status'            => array( 'publish' ),
      );
      // The Query
      $post_type_query = new WP_Query( $args );
      $extra_name = ( isset( $this->field['attributes']['multiple'] ) ) ? '[]' : '';
      $chosen_rtl = ( is_rtl() && strpos( $class, 'chosen' ) ) ? 'chosen-rtl' : '';
      
      echo '<select name="'. $this->element_name( $extra_name ) .'"'. $this->element_class( $chosen_rtl ) . $this->element_attributes() .'>';

      echo ( isset( $this->field['default_option'] ) ) ? '<option value="">'.$this->field['default_option'].'</option>' : '';
      if ( $post_type_query->have_posts() ) {

        while ( $post_type_query->have_posts() ) {
            $post_type_query->the_post();
            if( isset( $this->field['show_post_ID'] ) ) {
              if( $this->field['show_post_ID'] == false ) $show_post_ID = get_the_title();
              else $show_post_ID = get_the_ID();
            } else {
              $show_post_ID = get_the_ID();
            } 
            echo '<option value="'. $show_post_ID .'" '. $this->checked( $this->element_value(), $show_post_ID, 'selected' ) .'>'. get_the_title() .'</option>';
        }
      } 
      echo '</select>';

      // Restore original Post Data
      wp_reset_postdata();

    }

    echo $this->element_after();

  }

}

