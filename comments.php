<?php if ( is_singular() ) wp_enqueue_script( "comment-reply" ); ?>
<?php wp_list_comments();?>
<?php
	$args = array(
  'id_form'           => 'commentform',
  'class_form'      => 'comment-form',
  'id_submit'         => 'submit',
  'class_submit'      => 'submit',
  'name_submit'       => 'submit',
  'title_reply'       => __( 'Dejar una respuesta','flexlc3' ),
  'title_reply_to'    => __( 'Dejar una respuesta a %s','flexlc3' ),
  'cancel_reply_link' => __( 'Cancelar respuesta','flexlc3' ),
  'label_submit'      => __( 'Dejar comentario', 'flexlc3' ),
  'format'            => 'xhtml',

  'comment_field' =>  '<p class="comment-form-comment"><label for="comment">' . _x( 'Comentar', 'noun', 'flexlc3' ) .
    '</label><textarea id="comment" name="comment" cols="45" rows="8" aria-required="true">' .
    '</textarea></p>',

  'must_log_in' => '<p class="must-log-in">' .
    sprintf(
      __( 'Debes de estar <a href="%s">autenticado</a> para comentar.','flexlc3' ),
      wp_login_url( apply_filters( 'the_permalink', get_permalink() ) )
    ) . '</p>',

  'logged_in_as' => '<p class="logged-in-as">' .
    sprintf(
    __( 'Autenticado como <a href="%1$s">%2$s</a>. <a href="%3$s" title="Salir de la cuenta">Salir</a>','flexlc3' ),
      admin_url( 'profile.php' ),
      $user_identity,
      wp_logout_url( apply_filters( 'the_permalink', get_permalink( ) ) )
    ) . '</p>',

  'comment_notes_before' => '<p class="comment-notes">' .
    __( 'No publicaremos tu correo electronico.','flexlc3' ) . ( $req ? $required_text : '' ) .
    '</p>',

  'comment_notes_after' => '<p class="form-allowed-tags">' .
    sprintf(
      __( 'Puedes utilizar estas etiquetas y atributos <abbr title="HyperText Markup Language">HTML</abbr>: %s','flexlc3' ),
      ' <code>' . allowed_tags() . '</code>'
    ) . '</p>',

  'fields' => apply_filters( 'comment_form_default_fields', $fields ),
);

	comment_form();

	 the_comments_pagination(); 
	
	
	
?>