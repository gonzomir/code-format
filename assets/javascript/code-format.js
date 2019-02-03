( function( wp ) {
	var __ = wp.i18n.__;
	var select = wp.data.select;

	var codeEdit = function( props ) {
		var onToggle = function(){
			props.onChange( wp.richText.toggleFormat(
				props.value,
				{ type: 'core/code' }
			) );
		}

		return [
			wp.element.createElement(
				wp.editor.RichTextShortcut,
				{
					type: "primary",
					character: "d",
					onUse: onToggle,
				}
			),
			wp.element.createElement(
				wp.editor.RichTextToolbarButton,
				{
					icon: 'editor-code',
					title: __( 'Code' ),
					onClick: onToggle,
					isActive: props.isActive,
				}
			),
		];
	}

	var code_format = select( 'core/rich-text' ).getFormatType( 'core/code' );

	code_format.edit = codeEdit;

} )( window.wp );
