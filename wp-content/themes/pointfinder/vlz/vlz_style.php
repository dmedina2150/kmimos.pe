<style>
	.depuracion{
	    position: fixed;
	    top: 50px;
	    right: 20px;
	    width: 350px;
		height: calc( 100% - 100px );
	    box-sizing: border-box;
	    padding: 20px;
	    z-index: 9999999;
	    display: none;
	}

	.vlz_form{
	    display: block;
	    margin: 0 0 10px;
	    font-size: 13px;
	    line-height: 1.42857143;
	    color: #333;
	    border-radius: 4px;
	    box-sizing: border-box;
	}

	.vlz_form{
		
	}

	.vlz_form label{
	    color: #8e8e8e;
	    font-size: 12px;
	    font-weight: bold;
	}

	.vlz_input{
	    width: 100%;
	    box-sizing: border-box;
	    border: 1px solid #ccc;
	    border-right: 0px;
	    padding: 5px 10px;
	    margin: 0px;
	}

	.vlz_input:focus{
	    border: 1px solid #ccc;
	    box-shadow: 0px 0px 0px #CCC;
	    outline: none;
	}

	.vlz_contenedor{
		display: block;
		overflow: hidden;
	    border-right: 1px solid #ccc;
	    margin-bottom: 5px;
	}

	.vlz_medio{
		float: left;
		width: 50%;
	}

	.vlz_boton{
		width: 100%;
		box-sizing: border-box;
		background-color: #fefe78;
		border: 1px solid #ccc;
		color: #333;
		border-radius: 4px;
		padding: 10px;
		margin-bottom: 5px;
	    font-weight: bold;
	    font-size: 13px;
	    font-family: Roboto;
	}

	.vlz_boton:hover{
		background-color: #0ab7a1 !important;
		color: #FFF !important;
	}

	.vlz_checkbox_contenedor{

	}

	.vlz_checkbox_contenedor div{
		display: table;
		width: 100%;
		border: solid 1px #CCC;
		margin: 0px 0px 5px;
		height: 30px;
		background: rgba(245, 245, 245, 0.57);
	}

	.vlz_checkbox_contenedor div i{
	    display: table-cell;
	    padding: 4px 0px 0px 5px;
	    font-size: 20px;
	    width: 30px;
	}

	.vlz_checkbox_contenedor div input{
	    display: none;
	}

	.vlz_checkbox_contenedor div p{
	    display: table-cell;
	    vertical-align: middle;
	    padding: 0px 5px 0px;
	    margin: 0px;
        font-size: 11px;
	}

	.vlz_checkbox_contenedor div p sup{
	    float: right;
	    font-size: 80%;
	}

	/*.vlz_checkbox_contenedor div:hover{
		background: #fefe78;
		cursor: pointer;
	}*/

	.vlz_checkbox_contenedor div:hover *{
		color:  #000;
	}
	
	.vlz_check_select{
		#border: solid 1px #00b69d !important;
		background: #fefe78 !important;
	}

	.vlz_check_select *{
		
	}

	.vlz_sub_seccion{
		display: block;
	    margin-bottom: 5px;
	}

	.vlz_sub_seccion_titulo{
	    display: block;
	    padding: 8px;
	    border: solid 1px #5cc9ac;
	    background: #5cc9ac;
	    cursor: pointer;
	    color: #000;
	    font-size: 13px;
	    font-family: Roboto;
	}

	.vlz_sub_seccion_interno{
	    padding: 5px 5px 2px;
	    background: #FFF;
	    border: solid 1px #5cc9ac;
	    border-radius: 0px 0px 4px 4px;
	    border-top: 0px;
	    #display: none;
	}

	div#rating {
	    font-size: 10px;
	}

	.vlz_nav_cont{
		overflow: hidden;
	    text-align: left;
	}

	.vlz_nav_cont a{
	    padding: 5px 10px;
	    border: solid 1px #a9a9a9;
	    border-radius: 3px;
	    display: inline-block;
	    text-decoration: none;
	    text-align: center;
	    cursor: pointer;
	    margin-right: 3px;
	    background: #fefe78;
	}

	.vlz_nav_cont a:hover{
		background: #dcdc4c;
	}

	.vlz_nav_cont_interno{

	}

	.vlz_activa{
	    background: #00d2b7 !important;
	    color: #FFF;
	}

	.vlz_anterior{
		float: left;
	}

	.vlz_siguiente{
		float: right;
	}

	#mapa{
		display: block;
		height: 300px;
		background: #EEE;
	}

	.datos_paginacion{
		float: left;
	    width: calc( 100% - 200px );
	    padding: 10px;
	    text-align: center;
	}
	.mini_map{
	    position: relative;
		display: block;
	}
	.mini_map div{
		position: absolute;
	    z-index: 1000;
	    bottom: 0px;
	    left: 0px;
	    width: 100%;
	    box-sizing: border-box;
	    padding: 5px;
	    color: #FFF;
	    background: rgba(0,0,0,5);
	}
	.vlz_contenedor_mapa{
		position: relative;
	}
	.vlz_bloquear_map{
		position: absolute;
		top: 0px;
		left: 0px;
		width: 100%;
		height: 100%;
		z-index: 100;
		background: rgba(0,0,0,0);
	}
	.js-info-bubble-close{
		right: 5px !important;
		top: 5px !important;
	}

	.pfStyleV span:nth-of-type(3) { top: 0; right: 50%; margin: -20px -78px 0 0; }

	#filtros{
	    position: absolute;
		top: -13px;
	}

	.vlz_avatar{
		display: block;
		width: 80px;
		height: 80px;
	    border: 3px solid #546e7a;
		border-radius: 50%;
		background-position: center center;
		background-size: cover;
		background-repeat: no-repeat;
	    background-color: #292929;
	}

	.pflist-item-inner {
	    border: 1px solid #546e7a !important;
	    padding-bottom: 5px;
	}

	.vlz_mensaje{
		position: fixed;
		left: 10px;
		top: 10px;
		width: 500px;
		height: calc( 100% - 20px );
		z-index: 99999999;
		background: #FFF;
    	padding: 10px;
	}

	/*
		Nuevos Estilos
	*/

	.vlz_postada_cuidador{
		position: relative;
	    height: 200px;
	    overflow: hidden;
	    z-index: 0;
	}

	.vlz_img_cuidador{
		position: absolute;
		top: 0px;
		left: 0px;
		width: 100%;
	    height: 200px;
	    z-index: 100;
	    display: block;
	    background-size: cover;
	    background-position: center;
	    background-repeat: no-repeat;
	    filter: blur(2px);
	}

	.vlz_img_cuidador_interno{
		position: absolute;
		top: 10px;
		left: 10px;
		width: calc( 100% - 20px );
	    height: 180px;
	    z-index: 200;
	    display: block;
	    background-size: contain;
	    background-position: center;
	    background-repeat: no-repeat;
	}

	.pflist-itemdetails .pflist-itemtitle a {
	    font-size: 20px;
	}

	
	@media (max-width: 500px){

		.vlz_nav_cont {
		    overflow: auto;
        	margin: 0px 0px 25px;
		}

		.vlz_nav_cont_interno{
			width: 1000px;
		}
		.ocultarMapa{display: none;}
	}
</style>