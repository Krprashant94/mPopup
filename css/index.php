<?php header("Content-type: text/css"); ?>
#mPopup{
    overflow-y: scroll;
    width: auto;
    position:fixed;
    top:0px;
    left:0px;
    background:rgba(88, 88, 88, 0.4);
    height:100%;
    width:100%;
    z-index:9995;
}
.morus_content{
    padding:5px;
    position:relative;
    background:#FFF;
    z-index:9996;
}
.body{
    overflow-y:auto;
    overflow-x:hidden;
}
.morus_head{
    text-align:right;
    border-bottom:5px solid #CD9BFF;
    font-weight:bold;
    font-size:20px;
    font-family:"Comic Sans MS", cursive;
    color:#004000;
    z-index:9997;
}
.content .img{
    position:absolute;
    top:-7px;
    right:-7px;
    width:15px;
    height:15px;
    background-image:url("close.png");
}
.morus_foot{
    position: relative;
    top: 20px;
    box-shadow:2px 2px 2px #9090FF;
    padding:7px 20px;
    text-align:center;
    font-size:14px;
    font-family:"Palatino Linotype", "Book Antiqua", Palatino, serif;
    z-index:9998;
}
.norm{
	border-radius: 100px;
}
.morus_progress{
    -webkit-animation: progress-bar-stripes 2s linear infinite;
    -moz-animation: progress-bar-stripes 2s linear infinite;
    -ms-animation: progress-bar-stripes 2s linear infinite;
    -o-animation: progress-bar-stripes 2s linear infinite;
    
    background-image: -moz-linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
    background-image: -o-linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
    background-image: linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
    
    -webkit-background-size: 40px 40px;
    -moz-background-size: 40px 40px;
    -o-background-size: 40px 40px;
    background-size: 40px 40px;
}
@media (max-width: 550px) {
	.morus_content{
		width:90%;
	}
}