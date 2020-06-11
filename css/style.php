<style type="text/css">

html{
    scroll-behavior:smooth;
    
    
}

*{padding:0; margin:0; box-sizing:border-box; font-family: 'Baloo Paaji 2', cursive;}
.nstyle{
    background-color:green;
    
}


.row{margin-left:0!important;  margin-right:0!important;
    
}
.nstyle a{
    color:white;
    
}
.main_head{
    height:450px;
    width:100%;
}
.rightside h1{
font-size:4rem;
}
.ca img{
    animation:cor 3s linear infinite;
}
@keyframes cor{
    0%{transform:rotate(0);}
    100%{transform:rotate(360deg);}
    
}
.leftside img{
    animation:log 3s linear infinite;
}
@keyframes log{
   0%{
       transform: scale(.75);
   }
   20%{
       transform: scale(1);
   }
   40%{
       transform: scale(.75);
   }
   60%{
       transform: scale(1);
   }
   80%{
       transform: scale(.75);
   }
  100%{
       transform: scale(1);
   }

    
}
.sub_section{
    background-color:lightgreen;
}

.he{
    background-color:lightblue;
}



.footer_style{
    background-color:lightgreen;
    
}
.footer_style p{
    
    
}

#mybtn{
    display:none;
    position:fixed;
    bottom:30px;
    right:40px;
    z-index:99;
    outline:none;
    background-color:red;
    color:blue;
    curser:pointer;
    padding:10px;
    border-radius:10px;
}
#mybtn:hover{
    width:50px;
    background-color:green;
    color:white;
}



@media (max-width:768px){
    .main_head{
        height:700px; text-align:center;
    }
    .main_head{
        text-align:center;
        padding:0;
        width:100%;
        font-size:30px;
    }
}

.set{
    border-radius:50px;
    transition: transform .2s; /* Animation */
}








.leftside img:hover{
    animation:cor 3s linear infinite;
    width:500px;
}
@keyframes cor{
    0%{transform:rotate(0);}
    100%{transform:rotate(360deg);}
    
}


.mar{
    
    color:green;

}


.main{
    background-color:#26de81;
    display:flex;
    justify-content:center;
    alighn-items:center;

}


</style>



