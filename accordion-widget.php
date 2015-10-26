<?php 
class Accordion_Widget extends WP_Widget {

	public function __construct() {
		// widget actual processes
		parent::__construct(
	 		'accordion_widget', // Base ID
			'XTRE_Accordion', // Name
			array( 'description' => __( 'Xtreme Accordion Custom Built By Frank Thoeny', 'text_domain' ), ) // Args
		);
	}

 	public function form( $instance ) {
		// outputs the options form on admin
		
		// picture 1
		if ( isset( $instance['pic1'] ) ) {
			$pic1 	= $instance['pic1'];					
		}else {
			$pic1 = __('', 'text_domain');
		}		
		if ( isset( $instance['title1'] ) ) {
			$title1 	= $instance['title1'];					
		}else {
			$title1 = __('New title', 'text_domain');
		}
		if ( isset( $instance['text1'] ) ) {
			$text1 	= $instance['text1'];					
		}else {
			$text1 = __('New text', 'text_domain');
		}
		
		// picture 2
		if ( isset( $instance['pic2'] ) ) {
			$pic2 	= $instance['pic2'];					
		}else {
			$pic2 = __('', 'text_domain');
		}		
		if ( isset( $instance['title2'] ) ) {
			$title2 	= $instance['title2'];					
		}else {
			$title2 = __('New title', 'text_domain');
		}
		if ( isset( $instance['text2'] ) ) {
			$text2 	= $instance['text2'];					
		}else {
			$text2 = __('New text', 'text_domain');
		}
		
		// picture 3
		if ( isset( $instance['pic3'] ) ) {
			$pic3 	= $instance['pic3'];					
		}else {
			$pic3 = __('', 'text_domain');
		}		
		if ( isset( $instance['title3'] ) ) {
			$title3 	= $instance['title3'];					
		}else {
			$title3 = __('New title', 'text_domain');
		}
		if ( isset( $instance['text3'] ) ) {
			$text3 	= $instance['text3'];					
		}else {
			$text3 = __('New text', 'text_domain');
		}

		// picture 4
		if ( isset( $instance['pic4'] ) ) {
			$pic4 	= $instance['pic4'];					
		}else {
			$pic4 = __('', 'text_domain');
		}		
		if ( isset( $instance['title4'] ) ) {
			$title4 	= $instance['title4'];					
		}else {
			$title4 = __('New title', 'text_domain');
		}
		if ( isset( $instance['text4'] ) ) {
			$text4 	= $instance['text4'];					
		}else {
			$text4 = __('New text', 'text_domain');
		}
		
		// picture 5
		if ( isset( $instance['pic5'] ) ) {
			$pic5 	= $instance['pic5'];					
		}else {
			$pic5 = __('', 'text_domain');
		}		
		if ( isset( $instance['title5'] ) ) {
			$title5 	= $instance['title5'];					
		}else {
			$title5 = __('New title', 'text_domain');
		}
		if ( isset( $instance['text5'] ) ) {
			$text5 	= $instance['text5'];					
		}else {
			$text5 = __('New text', 'text_domain');
		}
		
		// picture 6
		if ( isset( $instance['pic6'] ) ) {
			$pic6 	= $instance['pic6'];					
		}else {
			$pic6 = __('', 'text_domain');
		}		
		if ( isset( $instance['title6'] ) ) {
			$title6 	= $instance['title6'];					
		}else {
			$title6 = __('New title', 'text_domain');
		}
		if ( isset( $instance['text6'] ) ) {
			$text6 	= $instance['text6'];					
		}else {
			$text6 = __('New text', 'text_domain');
		}
		?>
		

		
		<!-- Picture 1 -->
		<fieldset style="border-bottom:1px solid #ccc;">
			<p>
				<label for="<?php echo $this->get_field_id( 'pic1' ); ?>"><?php _e( 'Picture:' ); ?></label> 
				<input id="<?php echo $this->get_field_id( 'pic1' ); ?>" name="<?php echo $this->get_field_name( 'pic1' ); ?>" type="text" value="<?php echo esc_attr( $pic1 ); ?>" />
				<input id="<?php echo $this->get_field_id( 'picbtn1' ); ?>" type="button" value="Find..." />	
			</p>
			
			<p>
				<label for="<?php echo $this->get_field_id( 'title1' ); ?>"><?php _e( 'Title:' ); ?></label> 
				<input class="widefat" id="<?php echo $this->get_field_id( 'title1' ); ?>" name="<?php echo $this->get_field_name( 'title1' ); ?>" type="text" value="<?php echo esc_attr( $title1 ); ?>" />	
			</p>
			
			<p>
				<label for="<?php echo $this->get_field_id( 'text1' ); ?>"><?php _e( 'Text:' ); ?></label> 
				<input class="widefat" id="<?php echo $this->get_field_id( 'text1' ); ?>" name="<?php echo $this->get_field_name( 'text1' ); ?>" type="text" value="<?php echo esc_attr( $text1 ); ?>" />		
			</p>
		</fieldset>
		
		<!-- Picture 2 -->
		<fieldset style="border-bottom:1px solid #ccc;">
			<p>
				<label for="<?php echo $this->get_field_id( 'pic2' ); ?>"><?php _e( 'Picture:' ); ?></label> 
				<input id="<?php echo $this->get_field_id( 'pic2' ); ?>" name="<?php echo $this->get_field_name( 'pic2' ); ?>" type="text" value="<?php echo esc_attr( $pic2 ); ?>" />	
				<input id="<?php echo $this->get_field_id( 'picbtn2' ); ?>" type="button" value="Find..." />
			</p>
			
			<p>
				<label for="<?php echo $this->get_field_id( 'title2' ); ?>"><?php _e( 'Title:' ); ?></label> 
				<input class="widefat" id="<?php echo $this->get_field_id( 'title2' ); ?>" name="<?php echo $this->get_field_name( 'title2' ); ?>" type="text" value="<?php echo esc_attr( $title2 ); ?>" />	
			</p>
			
			<p>
				<label for="<?php echo $this->get_field_id( 'text2' ); ?>"><?php _e( 'Text:' ); ?></label> 
				<input class="widefat" id="<?php echo $this->get_field_id( 'text2' ); ?>" name="<?php echo $this->get_field_name( 'text2' ); ?>" type="text" value="<?php echo esc_attr( $text2 ); ?>" />		
			</p>
		</fieldset>
		
		<!-- Picture 3 -->
		<fieldset style="border-bottom:1px solid #ccc;">
			<p>
				<label for="<?php echo $this->get_field_id( 'pic3' ); ?>"><?php _e( 'Picture:' ); ?></label> 
				<input id="<?php echo $this->get_field_id( 'pic3' ); ?>" name="<?php echo $this->get_field_name( 'pic3' ); ?>" type="text" value="<?php echo esc_attr( $pic3 ); ?>" />	
				<input id="<?php echo $this->get_field_id( 'picbtn3' ); ?>" type="button" value="Find..." />
			</p>
			
			<p>
				<label for="<?php echo $this->get_field_id( 'title3' ); ?>"><?php _e( 'Title:' ); ?></label> 
				<input class="widefat" id="<?php echo $this->get_field_id( 'title3' ); ?>" name="<?php echo $this->get_field_name( 'title3' ); ?>" type="text" value="<?php echo esc_attr( $title3 ); ?>" />	
			</p>
			
			<p>
				<label for="<?php echo $this->get_field_id( 'text3' ); ?>"><?php _e( 'Text:' ); ?></label> 
				<input class="widefat" id="<?php echo $this->get_field_id( 'text3' ); ?>" name="<?php echo $this->get_field_name( 'text3' ); ?>" type="text" value="<?php echo esc_attr( $text3 ); ?>" />		
			</p>
		</fieldset>
		
		<!-- Picture 4 -->
		<fieldset style="border-bottom:1px solid #ccc;">
			<p>
				<label for="<?php echo $this->get_field_id( 'pic4' ); ?>"><?php _e( 'Picture:' ); ?></label> 
				<input id="<?php echo $this->get_field_id( 'pic4' ); ?>" name="<?php echo $this->get_field_name( 'pic4' ); ?>" type="text" value="<?php echo esc_attr( $pic4 ); ?>" />	
				<input id="<?php echo $this->get_field_id( 'picbtn4' ); ?>" type="button" value="Find..." />
			</p>
			
			<p>
				<label for="<?php echo $this->get_field_id( 'title4' ); ?>"><?php _e( 'Title:' ); ?></label> 
				<input class="widefat" id="<?php echo $this->get_field_id( 'title4' ); ?>" name="<?php echo $this->get_field_name( 'title4' ); ?>" type="text" value="<?php echo esc_attr( $title4 ); ?>" />	
			</p>
			
			<p>
				<label for="<?php echo $this->get_field_id( 'text4' ); ?>"><?php _e( 'Text:' ); ?></label> 
				<input class="widefat" id="<?php echo $this->get_field_id( 'text4' ); ?>" name="<?php echo $this->get_field_name( 'text4' ); ?>" type="text" value="<?php echo esc_attr( $text4 ); ?>" />		
			</p>
		</fieldset>
		
		
		<!-- Picture 5 -->
		<fieldset style="border-bottom:1px solid #ccc;">
			<p>
				<label for="<?php echo $this->get_field_id( 'pic5' ); ?>"><?php _e( 'Picture:' ); ?></label> 
				<input id="<?php echo $this->get_field_id( 'pic5' ); ?>" name="<?php echo $this->get_field_name( 'pic5' ); ?>" type="text" value="<?php echo esc_attr( $pic5 ); ?>" />	
				<input id="<?php echo $this->get_field_id( 'picbtn5' ); ?>" type="button" value="Find..." />
			</p>
			
			<p>
				<label for="<?php echo $this->get_field_id( 'title5' ); ?>"><?php _e( 'Title:' ); ?></label> 
				<input class="widefat" id="<?php echo $this->get_field_id( 'title5' ); ?>" name="<?php echo $this->get_field_name( 'title5' ); ?>" type="text" value="<?php echo esc_attr( $title5 ); ?>" />	
			</p>
			
			<p>
				<label for="<?php echo $this->get_field_id( 'text5' ); ?>"><?php _e( 'Text:' ); ?></label> 
				<input class="widefat" id="<?php echo $this->get_field_id( 'text5' ); ?>" name="<?php echo $this->get_field_name( 'text5' ); ?>" type="text" value="<?php echo esc_attr( $text5 ); ?>" />		
			</p>
		</fieldset>
		
		<!-- Picture 6 -->
		<fieldset style="border-bottom:1px solid #ccc;">
			<p>
				<label for="<?php echo $this->get_field_id( 'pic6' ); ?>"><?php _e( 'Picture:' ); ?></label> 
				<input id="<?php echo $this->get_field_id( 'pic6' ); ?>" name="<?php echo $this->get_field_name( 'pic6' ); ?>" type="text" value="<?php echo esc_attr( $pic6 ); ?>" />	
				<input id="<?php echo $this->get_field_id( 'picbtn6' ); ?>" type="button" value="Find..." />
			</p>
			
			<p>
				<label for="<?php echo $this->get_field_id( 'title6' ); ?>"><?php _e( 'Title:' ); ?></label> 
				<input class="widefat" id="<?php echo $this->get_field_id( 'title6' ); ?>" name="<?php echo $this->get_field_name( 'title6' ); ?>" type="text" value="<?php echo esc_attr( $title6 ); ?>" />	
			</p>
			
			<p>
				<label for="<?php echo $this->get_field_id( 'text6' ); ?>"><?php _e( 'Text:' ); ?></label> 
				<input class="widefat" id="<?php echo $this->get_field_id( 'text6' ); ?>" name="<?php echo $this->get_field_name( 'text6' ); ?>" type="text" value="<?php echo esc_attr( $text6 ); ?>" />		
			</p>
		</fieldset>
		
		<?php		
		
	}

	public function update( $new_instance, $old_instance ) {
			
		// processes widget options to be saved		
		
		$instance = array();						
		$instance['pic1'] = strip_tags($new_instance['pic1']);		
		$instance['title1'] = strip_tags($new_instance['title1']);
		$instance['text1'] = strip_tags($new_instance['text1']);
		
		$instance['pic2'] = strip_tags($new_instance['pic2']);		
		$instance['title2'] = strip_tags($new_instance['title2']);
		$instance['text2'] = strip_tags($new_instance['text2']);
		
		$instance['pic3'] = strip_tags($new_instance['pic3']);		
		$instance['title3'] = strip_tags($new_instance['title3']);
		$instance['text3'] = strip_tags($new_instance['text3']);
		
		$instance['pic4'] = strip_tags($new_instance['pic4']);		
		$instance['title4'] = strip_tags($new_instance['title4']);
		$instance['text4'] = strip_tags($new_instance['text4']);
		
		$instance['pic5'] = strip_tags($new_instance['pic5']);		
		$instance['title5'] = strip_tags($new_instance['title5']);
		$instance['text5'] = strip_tags($new_instance['text5']);
		
		$instance['pic6'] = strip_tags($new_instance['pic6']);		
		$instance['title6'] = strip_tags($new_instance['title6']);
		$instance['text6'] = strip_tags($new_instance['text6']);
		
		$this->create_XML($args,$instance);
		return $instance;
	}

	public function widget( $args, $instance ) {
		// outputs the content of the widget
		extract( $args );		
		
		echo $before_widget;
		echo xtremeAccordionStart('[xtreme-accordion]');
		echo $after_widget;
	}
	
	private function create_XML($args, $instance) {
		
		extract( $args );
		// picture 1
		$pic1 = apply_filters('widget_pic1', $instance['pic1']);		
		$title1 = apply_filters( 'widget_title1', $instance['title1'] );
		$text1 = apply_filters( 'widget_text1', $instance['text1'] );
		//picture 2
		$pic2 = apply_filters('widget_pic2', $instance['pic2']);		
		$title2 = apply_filters( 'widget_title2', $instance['title2'] );
		$text2 = apply_filters( 'widget_text2', $instance['text2'] );
		// picture 3
		$pic3 = apply_filters('widget_pic3', $instance['pic3']);		
		$title3 = apply_filters( 'widget_title3', $instance['title3'] );
		$text3 = apply_filters( 'widget_text3', $instance['text3'] );
		// picture 4
		$pic4 = apply_filters('widget_pic4', $instance['pic4']);		
		$title4 = apply_filters( 'widget_title4', $instance['title4'] );
		$text4 = apply_filters( 'widget_text4', $instance['text4'] );
		// picture 5
		$pic5 = apply_filters('widget_pic5', $instance['pic5']);		
		$title5 = apply_filters( 'widget_title5', $instance['title5'] );
		$text5 = apply_filters( 'widget_text5', $instance['text5'] );
		// picture 6
		$pic6 = apply_filters('widget_pic6', $instance['pic6']);		
		$title6 = apply_filters( 'widget_title6', $instance['title6'] );
		$text6 = apply_filters( 'widget_text6', $instance['text6'] );	
		
		
		// create the xml file
		
		$fileName = WP_CONTENT_DIR."/flashtuning/xtreme-accordion/demo-content.xml";
		$fileHandle = fopen($fileName, 'w') or die("can't open file");
		
		// write content
		$stringData = '<?xml version="1.0" encoding="utf-8"?>
		    <appeareance>
		        <object param="visibleItems" value="3" />
		        <object param="startingItem" value="1" />
		        <object param="useRandomOrdering" value="0" />
		        <object param="textBoxTween" type="back" method="easeOut" direction="left" delay="0" duration="0.7" blur="1"/>
		        <object param="textBoxPosition" hAlign="center" vAlign="center" />
		        <object param="textBoxSettings" delayBetween="1" bkgndColor="0xffffff" bkgndAlpha="50" embeddedFont="Default"/>
		        <object param="cssStyle" value="css/style.css"/>
		        <object param="defaultFontSize" value="10"/>
		    </appeareance>
		    <content>
		        <menuItem>
		            <media type="image" src="'.$instance['pic1'].'" delay="3" display="crop" width="250" height="300"/>           
		            <title bkgndColor="0x071114" bkgndAlpha="40" xPadding="0" yPadding="0" align="center" textAlpha="80" embeddedFont="Default" textTopPadding="5" textLeftPadding="10">
		                <![CDATA[<p><font color="#eeeeee" size="16" face="verdana">'.$instance['title1'].'</font></p>]]>
		            </title>
		            <text>            
		                <p direction="left" width="200" padding="10" bkgndColor="0x071114" bkgndAlpha="90">		               
		                <![CDATA[<p align="center">'.$instance['text1'].'</p>]]>
		                </p>		                
		            </text>
		        </menuItem>
		        <menuItem>
		            <media type="image" src="'.$instance['pic2'].'" delay="2" display="resize" link="http://flashtuning.net/" target="_blank"/>
		            <title bkgndColor="0x071114" bkgndAlpha="40" xPadding="5" yPadding="0" align="center" textAlpha="80" embeddedFont="Default" textTopPadding="5" textLeftPadding="10">
		                <![CDATA[<p>'.$instance['title2'].'</p>]]>
		            </title>
		            <text hAlign="left" vAlign="top">
		                <p direction="alpha" width="250" padding="5" bkgndColor="0x071114" bkgndAlpha="80">
		                <![CDATA[<p align="right">'.$instance['text2'].'</p>]]>
		                </p>
		            </text>
		        </menuItem>
		        <menuItem>
		            <media type="image" src="'.$instance['pic3'].'" delay="2" display="resize" link="http://flashtuning.net/" target="_blank"/>
		            <title bkgndColor="0x071114" bkgndAlpha="40" xPadding="5" yPadding="0" align="center" textAlpha="80" embeddedFont="Default" textTopPadding="5" textLeftPadding="10">
		                <![CDATA[<p>'.$instance['title3'].'</p>]]>
		            </title>
		            <text hAlign="left" vAlign="top">
		                <p direction="alpha" width="250" padding="5" bkgndColor="0x071114" bkgndAlpha="80">
		                <![CDATA[<p align="right">'.$instance['text3'].'</p>]]>
		                </p>
		            </text>
		        </menuItem>
				<menuItem>
		            <media type="image" src="'.$instance['pic4'].'" delay="2" display="resize" link="http://flashtuning.net/" target="_blank"/>
		            <title bkgndColor="0x071114" bkgndAlpha="40" xPadding="5" yPadding="0" align="center" textAlpha="80" embeddedFont="Default" textTopPadding="5" textLeftPadding="10">
		                <![CDATA[<p>'.$instance['title4'].'</p>]]>
		            </title>
		            <text hAlign="left" vAlign="top">
		                <p direction="alpha" width="250" padding="5" bkgndColor="0x071114" bkgndAlpha="80">
		                <![CDATA[<p align="right">'.$instance['text4'].'</p>]]>
		                </p>
		            </text>
		        </menuItem>
		        <menuItem>
		            <media type="image" src="'.$instance['pic5'].'" delay="2" display="resize" link="http://flashtuning.net/" target="_blank"/>
		            <title bkgndColor="0x071114" bkgndAlpha="40" xPadding="5" yPadding="0" align="center" textAlpha="80" embeddedFont="Default" textTopPadding="5" textLeftPadding="10">
		                <![CDATA[<p>'.$instance['title5'].'</p>]]>
		            </title>
		            <text hAlign="left" vAlign="top">
		                <p direction="alpha" width="250" padding="5" bkgndColor="0x071114" bkgndAlpha="80">
		                <![CDATA[<p align="right">'.$instance['text5'].'</p>]]>
		                </p>
		            </text>
		        </menuItem>
		        <menuItem>
		            <media type="image" src="'.$instance['pic6'].'" delay="2" display="resize" link="http://flashtuning.net/" target="_blank"/>
		            <title bkgndColor="0x071114" bkgndAlpha="40" xPadding="5" yPadding="0" align="center" textAlpha="80" embeddedFont="Default" textTopPadding="5" textLeftPadding="10">
		                <![CDATA[<p>'.$instance['title6'].'</p>]]>
		            </title>
		            <text hAlign="left" vAlign="top">
		                <p direction="alpha" width="250" padding="5" bkgndColor="0x071114" bkgndAlpha="80">
		                <![CDATA[<p align="right">'.$instance['text6'].'</p>]]>
		                </p>
		            </text>
		        </menuItem>
		    </content>';
		
		fwrite($fileHandle, $stringData);
		
		// close xml file
		fclose($fileHandle);
	}
}
function upload_pics(){

?>
	<script type="text/javascript">			
		
		jQuery(document).ready(function($) {

			$('#widget-accordion_widget-12-picbtn1').click(function() {
				formfield = $(this).prev('input'); 
				tb_show('Upload Media', 'media-upload.php?type=image&TB_iframe=true');
				return false;
			});
			
			$('#widget-accordion_widget-12-picbtn2').click(function() {
				formfield = $(this).prev('input'); 
				tb_show('Upload Media', 'media-upload.php?type=image&TB_iframe=true');
				return false;
			});
			
			$('#widget-accordion_widget-12-picbtn3').click(function() {
				formfield = $(this).prev('input'); 
				tb_show('Upload Media', 'media-upload.php?type=image&TB_iframe=true');
				return false;
			});
			
			$('#widget-accordion_widget-12-picbtn4').click(function() {
				formfield = $(this).prev('input'); 
				tb_show('Upload Media', 'media-upload.php?type=image&TB_iframe=true');
				return false;
			});
			
			$('#widget-accordion_widget-12-picbtn5').click(function() {
				formfield = $(this).prev('input'); 
				tb_show('Upload Media', 'media-upload.php?type=image&TB_iframe=true');
				return false;
			});
			
			$('#widget-accordion_widget-12-picbtn6').click(function() {
				formfield = $(this).prev('input'); 
				tb_show('Upload Media', 'media-upload.php?type=image&TB_iframe=true');
				return false;
			});
			
			// fixed function.
			window.send_to_editor = function(html) {
				imgurl = $('img',html).attr('src');
				$(formfield).val(imgurl);
				tb_remove();
			}
		});
		</script>
		
	<?php 
	wp_enqueue_script('jquery');
	wp_enqueue_script('media-upload');
	wp_enqueue_script('thickbox');
	wp_enqueue_style('thickbox');
}
add_action('admin_footer', 'upload_pics' );
register_widget('Accordion_Widget');
