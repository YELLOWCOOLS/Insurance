$(document).ready(function() {


var page2= new Vue({
  el: '#page2',
  data: {
        fangdai: false,
        fangactive:false
      },
  methods:{
  	fang:function(){
  		
  		var bool=this.fangactive;
  		this.fangactive=!bool;
  	}
  }
});
var page3= new Vue({
  el: '#page3',
  data: {
        chedai: false,
        cheactive:false,
                    },
  methods:{
  	che:function(){
  		
  		var bool=this.cheactive;
  		this.cheactive=!bool;
  	}
  }
});
var page4=new Vue({
	el:'#page4',
	data:{
		money:50,
		head:$("head").val()
	},
});

var page5=new Vue({
	el:'#page5',
	data:{
		ca:"",
		head:$("head").val(),
		options:[{
          value: '1',
          label: '室内'
        },{
          value: '2',
          label: '户外简单'
        },{
          value: '3',
          label: '户外复杂'
        },{
          value: '4',
          label: '学生'
        },{
          value: '5',
          label: '退休'
        }]
	},
})

var page6=new Vue({
	el:'#page6',
	data:{
    year:"",
		birthday:"",
		head:$("head").val(),
    ok:true
	},

});
  $(function() {
  $('#date5').datePicker({
            beginyear: 1910,
            endyear:new Date().getFullYear(),
            theme: 'date',
            callBack: function() {
               var xs=$('#date5').val().split('-');
               page6.year=xs[0];
            }
        });
});

var page7=new Vue({
	el:'#page7',
	data:{
		shebao:false,
		head:$("head").val(),
	}
});

  var app = new Vue({
  el: '#page1',
  data: {
        head:true,
        radio1: "男",
        misactive:true,
        fisactive:false,
      },
  methods:{
    male:function(){
      page4.head=false;
      page5.head=false;
      page6.head=false;
      page7.head=false;
    

      this.misactive=true;
      this.fisactive=false;
    },
    female:function(){
      page4.head=true;
      page5.head=true;
      page6.head=true;
      page7.head=true;
    
    this.misactive=false;
      this.fisactive=true;
    }
  }
});


$(".submit").click(function(event) {
      
      var now=new Date().getFullYear();
     
      
      var age=parseInt(now-page6.year);
    $("#fsex").val(app.radio1);
    $("#fincome").val(page4.money);
    $("#ftime").val(age);
    $("#fshebao").val(page7.shebao);
    
    $("#for").submit();
});

});


