var SL_Hilight = new Class({

	//implements
	Implements: [Options],	
	origStyles: null,				//for storing inactive field's styles (color, background color, and border color)
	
	//options
	options: {
	transitionTime: 400, 		//transition time (1 second = 1000) for animation
	inputs: null,					//form inputs you want to highlight on focus;  usually something like $$('input[type=text]', 'textarea')
	activeClass: null,			//focused input's CSS class we'lll morph to (defined in CSS doc)
	initialFocus: false			//flag for whether to focus on first input or not
	},

	//initialization
	initialize: function(options) {
		
		//set options
		this.setOptions(options);
		
		this.options.inputs.each(function(el, i){
			  //FYI,  el = the element, i = the index
			  
			  //get styles so we can revert to them on blur
			  //'border-color' returns 4 colors, so we need to grab each (don't know why, but morph won't work)
			  this.origStyles = el.getStyles('color','background-color','border-top-color', 'border-right-color', 'border-bottom-color', 'border-left-color');
			  
			  //setup animation styling
			  el.set('morph', { duration: this.options.transitionTime, transition: 'cubic:out' });
			  
			  el.addEvents({
				'focus': function() {
					//note the addition of the '.' here, otherwise 'morph' won't work
					//(you would remove the additonal '.' if you wanted to do a setStyle instead)
					el.morph("."+this.options.activeClass);  
				}.bind(this),
				'blur': function() {
					el.morph(this.origStyles);
				}.bind(this)
			  });
		
		 }, this);
		
		//focus on initial input field if set to true in options
		if(this.options.initialFocus != false){
			this.options.inputs[0].focus();
		}
		
	}

});
