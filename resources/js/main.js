$(function(){
    let input = document.querySelector('#input');
        
    input.addEventListener('change', function(){
        // console.log(this.value);
        let fe_display = document.querySelector('.frontend');
        let be_display = document.querySelector('.backend');
        let both_display = document.querySelector('.both');

        if (this.value == 'frontend') {
            fe_display.style.display = 'block';
            be_display.style.display = 'none';
            both_display.style.display = 'none';
        } else if(this.value == 'backend'){
            fe_display.style.display = 'none';
            be_display.style.display = 'block';
            both_display.style.display = 'none'
        } else if(this.value == 'both'){
            both_display.style.display = 'block'
            fe_display.style.display = 'none';
            be_display.style.display = 'none';
        } else {
            both_display.style.display = 'none'
            fe_display.style.display = 'none';
            be_display.style.display = 'none';
        }
    });
});

// $(function(){
//   let input = document.querySelector('#input');
      
//   input.addEventListener('change', function(){
//     let f_amount = document.querySelector('.f_amount');
//     let i_amount = document.querySelector('.i_amount');

//     if (this.selectedIndex === 1) {
//         f_amount.style.display = 'block';
//         i_amount.style.display = 'none';
//     } else if(this.selectedIndex === 2){
//         f_amount.style.display = 'none';
//         i_amount.style.display = 'block';
//     } else {
//         f_amount.style.display = 'none'
//         i_amount.style.display = 'none';
//     }
//   });
// });

/*
  Slidemenu
*/
(function() {
	var $body = document.body
	, $menu_trigger = $body.getElementsByClassName('menu-trigger')[0];

	if ( typeof $menu_trigger !== 'undefined' ) {
		$menu_trigger.addEventListener('click', function() {
			$body.className = ( $body.className == 'menu-active' )? '' : 'menu-active';
		});
	}

}).call(this);

$("#menu-toggle").click(function(e) {
    e.preventDefault();
    $("#wrapper").toggleClass("toggled");
  });

// $(function(){
//     let input = document.querySelector('#input');
        
//     input.addEventListener('change', function(){
//       let paystack_amount = document.querySelector('.paystack_amount');
//     //   let  = document.querySelector('.i_amount');
  
//       if (this.selectedIndex === 1) {
//         paystack_amount.display = 'block';
//         paystack_amount.value = 
//         // <input class="paystack_amount" type="hidden" name="amount" value="{{$course->price}}00">
//         //   f_amount.style.display = 'block';
//         //   i_amount.style.display = 'none';
//       } else if(this.selectedIndex === 2){
//           f_amount.style.display = 'none';
//           i_amount.style.display = 'block';
//       } else {
//           f_amount.style.display = 'none'
//           i_amount.style.display = 'none';
//       }
//     });
// });
