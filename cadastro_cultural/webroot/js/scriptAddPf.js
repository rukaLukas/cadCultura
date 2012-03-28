	
	function formatTelefone(element, e){
	  if (e.keyCode != 8){
	    length = element.value.length;
	    if (length == 2){
	      if (element.value.charAt(0)!="(")
	        element.value = "(" + element.value + ")";
	    }
	    if (length == 3)
	      if (element.value.charAt(0)=="(")
	        element.value += ")";
	    if (length == 8)
	      element.value += "-";
	  }
	}
	

  $(document).ready(function(){			  	  	  
	  
	$("#loading").hide();
	$(".paisHidden").hide();
	$("#PfCpf").mask("999.999.999-99");
	$("#PfRepresentanteCpf").mask("999.999.999-99");
	$("#PfRepresentanteRg").mask("9999999999");	
	$("#PfRepresentanteTelefone").mask("(99)9999-9999");
	$("#PfRepresentanteCelular").mask("(99)9999-9999");
	$("#PfRg").mask("99999999-99");
	$("#PfCep").mask("99999-999");		
	$("#PfTelefone").mask("(99)9999-9999");	
	$("#PfFax").mask("(99)9999-9999");	
	$(".ano").mask("9999");
	$(".data").mask("99/99/9999");
	$("#divNaturalizacao").hide();
	//$("#PfPassaporte").mask("999999999");
	//$("#listaErros").hide();
	var contadorCurriculos = 0;    	

	
	$("#PfPaisId").change(function(){		
		if($(this).val() != 1){
			$(".paisVisible").hide();
			$(".paisHidden").show();
		}
		else{
			$(".paisVisible").show();
			$(".paisHidden").hide();
		}
	});
	
	//usado na tela de edição pra buscar ao carregar a pagina se o país ñ é brasil
	// carrega os outros campos referntes a estrangeiro
	if($("#PfPaisId").val() != 1){
		$(".paisVisible").hide();
		$(".paisHidden").show();
	}	
	
	$("#PfNaturalizado").change(function(){
		if($(this).val() == "S")
			$("#divNaturalizacao").show();		
		else
			$("#divNaturalizacao").hide();
	});		
	
	//usado na tela de edição pra buscar ao carregar a pagina se PF naturalizado brasileiro
	// carrega os outros campos referntes a estrangeiro	
	if($("#PfNaturalizado").val() == "S"){				
		$("#divNaturalizacao").show();
	}	
	
	contadorDP = 0;
	$("#addGraducao").click(function(){	
		contadorDP++;		
		hoje = new Date();
		ano = parseInt(hoje.getYear());
		selectAno = "";
		for(i=1940; i<2013; i++){
			if(i == 2012){				
				selectAno += "<option selected=\"selected\" value=\"" + i + "\">" + i + "</option>";
			}				
			else
				selectAno += "<option value=\"" + i + "\">" + i + "</option>";
		}
		
		linhaGraduacao = "";		
		//linhaGraduacao += "<tr><td class=\"celula1\"><br><input type=\"checkbox\" name=\"removerGraduacao\" value=\""+contadorDP+"\"></td>";
		linhaGraduacao += "<tr id=\"graduacao1\"><td width=\"80px\" class=\"celula1\"><label for=\"lblRsocial\">Ano Graduação</label><br>";		
		//linhaGraduacao += "<div class=\"input select\"><input type=\"text\" id=\"PfAnoGraducao"+	contadorDP + "\" class=\"ano\" size=\"5\" maxlength=\"4\" name=\"data[Pf][ano_graducao][]\"></div></td>";
		linhaGraduacao += "<div class=\"input select\"><select id=\"PfAnoGraduacao"+ contadorDP + "\" name=\"data[Pf][ano_graduacao][]\"><option value=\"\"></option>";
		linhaGraduacao += selectAno;
		linhaGraduacao += "</select></div></td>";
        linhaGraduacao += "<td align=\"left\"><label for=\"lblRsocial\">Curso</label>";
        linhaGraduacao += "<div class=\"input text\"><input type=\"text\" id=\"PfCurso"+ contadorDP + "\" size=\"72\" maxlength=\"100\" name=\"data[Pf][curso][]\"><input type=\"checkbox\" name=\"removerGraduacao\" value=\""+contadorDP+"\"></div></td></tr>";
        //linhaGraduacao += "<td class=\"celula1\" align=\"left\"><br><input type=\"checkbox\" name=\"removerGraduacao\" value=\""+contadorDP+"\"></td></tr>";
		$("#tableAddGraduacao").append(linhaGraduacao);
		$("#contadorDP").val(contadorDP);
		return false;
	});	
	
	$("#removeGraduacao").click(function(){
		$("#tableAddGraduacao").find("input:checkbox").each(function(){											
			if(this.checked){				
				linha = $(this).attr("value");
				$("#graduacao"+linha).remove();				
			}																
		});
		return false;
	});
	
	contadorEmail = 0;
	$("#addEmail").click(function(){
		contadorEmail++;
		linhaEmail = "";
		linhaEmail += "<tr id=\"email"+contadorEmail+"\"><td colspan=\"3\" class=\"celula1\"><label for=\"lblRsocial\">Email Adicional</label><br>";
		linhaEmail += "<div class=\"input text required\"><label for=\"PfEmail\"></label><input type=\"text\" id=\"PfEmail\" maxlength=\"255\" size=\"60\" name=\"data[Pf][email][]\"><input type=\"checkbox\" name=\"removerEmail\" value=\""+contadorEmail+"\"></div><tr></td>";
		$("#emails").append(linhaEmail);
		$("#removeEmail").show();
		return false;
	});
	
	$("#removeEmail").click(function(){
		$("#emails").find("input:checkbox").each(function(){			
			if(this.checked){				
				linha = $(this).attr("value");
				$("#email"+linha).remove();				
				//return false;
			}			
		});		
		return false;
	});
	
	
	contadorSite = 0;
	$("#addSite").click(function(){
		contadorEmail++;
		linhaSite = "";
		linhaSite += "<tr id=\"site"+contadorSite+"\"><td colspan=\"3\" class=\"celula1\"><label for=\"lblRsocial\">Site Adicional</label><br>";
		linhaSite += "<div class=\"input text required\"><label for=\"PfSite\"></label><input type=\"text\" maxlength=\"255\" size=\"60\" name=\"data[Pf][site][]\"><input type=\"checkbox\" name=\"removerSite\" value=\""+contadorSite+"\"></div><tr></td>";
		$("#sites").append(linhaSite);
		$("#removeSite").show();
		return false;
	});
	
	$("#removeSite").click(function(){
		$("#sites").find("input:checkbox").each(function(){			
			if(this.checked){				
				linha = $(this).attr("value");
				$("#site"+linha).remove();				
				//return false;
			}			
		});		
		return false;
	});
	
	
	contadorTelefone = 0;
	$("#addTelefone").click(function(){
		contadorTelefone++;
		linhaTelefone = "";
		linhaTelefone +="<tr id=\"telefone"+contadorTelefone+"\"><td colspan=\"3\" class=\"celula1\"><label for=\"lblRsocial\">Telefone Adicional</label><br>";
		linhaTelefone += "<div class=\"input text\"><label for=\"PfTelefone\"></label><input type=\"text\" id=\"PfTelefone\" size=\"15\" name=\"data[Pf][telefone][]\" onkeydown=\"formatTelefone(this, event)\" maxlength=\"13\"><input type=\"checkbox\" name=\"removerTelefone\" value=\""+contadorTelefone+"\"></div></tr></td>";                    		
		$("#telefones").append(linhaTelefone);
		return false;
	});
	
	$("#removeTelefone").click(function(){
		$("#telefones").find("input:checkbox").each(function(){											
			if(this.checked){				
				linha = $(this).attr("value");
				$("#telefone"+linha).remove();				
			}																
		});
		return false;
	});
	
	
	
	
	function validaCPF(value) {
		   value = jQuery.trim(value);
			
			value = value.replace('.','');
			value = value.replace('.','');
			cpf = value.replace('-','');
			while(cpf.length < 11) cpf = "0"+ cpf;
			var expReg = /^0+$|^1+$|^2+$|^3+$|^4+$|^5+$|^6+$|^7+$|^8+$|^9+$/;
			var a = [];
			var b = new Number;
			var c = 11;
			for (i=0; i<11; i++){
				a[i] = cpf.charAt(i);
				if (i < 9) b += (a[i] * --c);
			}
			if ((x = b % 11) < 2) { a[9] = 0 } else { a[9] = 11-x }
			b = 0;
			c = 11;
			for (y=0; y<10; y++) b += (a[y] * c--);
			if ((x = b % 11) < 2) { a[10] = 0; } else { a[10] = 11-x; }
			if ((cpf.charAt(9) != a[9]) || (cpf.charAt(10) != a[10]) || cpf.match(expReg)) return false;
			return true;
	} 
	
	
	function validaAba1(){
		listaErros = new Array();		
		
		if($("#PfNome").val().length < 4)
	  		listaErros.push("Informe o campo Nome");	  
		if($("#PfNomeArtistico").val().length < 2)
	  		listaErros.push("Informe o campo Nome Artistico");
		if($("#PfPaisId").val() == "")
			listaErros.push("Informe o País");
		if($("#PfSexo").val() == "")
			listaErros.push("Informe o sexo");
		if($("#PfCpf").val() == "")
			listaErros.push("Informe o CPF");
		if($("#PfCpf").val() != "" && !validaCPF($("#PfCpf").val()))
			listaErros.push("Informe o CPF válido");
		if($("#PfRg").val() == "")
			listaErros.push("Informe o campo RG");

		if(listaErros.length > 0){
			erros = "";
			erros += "<ul>";
			$("#listaErros").css("visibility", "visible");
			$("#listaErros").css("display", "block");
			for(i=0; i<listaErros.length; i++){
				erros += "<li>"+listaErros[i]+"</li>";				
			}
			erros += "</ul>";
			$("#listaErros").html(erros);
			return false;
		}else{
			$("#listaErros").html("");
			$("#listaErros").css("visibility", "hidden");
			$("#listaErros").css("display", "none");
			return true;
		}
	}		
	
	function validaAba2(){
		listaErros = new Array();		
		
		if($("#PfProfissao").val().length < 4)
	  		listaErros.push("Informe o campo Profissão");	  
		
		if(listaErros.length > 0){
			erros = "";
			erros += "<ul>";
			$("#listaErros").css("visibility", "visible");
			$("#listaErros").css("display", "block");
			for(i=0; i<listaErros.length; i++){
				erros += "<li>"+listaErros[i]+"</li>";				
			}
			erros += "</ul>";
			$("#listaErros").html(erros);
			return false;
		}else{
			$("#listaErros").html("");
			$("#listaErros").css("visibility", "hidden");
			$("#listaErros").css("display", "none");
			return true;
		}
	}

	
	function validaAba3(){
		listaErros = new Array();				
		
		if($("#PfLogradouro").val().length < 4)
	  		listaErros.push("Informe o Logradouro");
		if($("#PfNumero").val() == "")
	  		listaErros.push("Informe o Número");
		if($("#PfBairro").val().length < 4)
	  		listaErros.push("Informe o Bairro");
		if($("#PfCidade").val().length < 4)
	  		listaErros.push("Informe a cidade");
		if($("#PfCep").val() == "")
	  		listaErros.push("Informe o CEP");		
		if($("#PfTelefone").val().length < 13)
			listaErros.push("Informe o Telefone");
		if($("#PfEmail").val().length < 7)
			listaErros.push("Informe o email");
		
		if(listaErros.length > 0){
			erros = "";
			erros += "<ul>";
			$("#listaErros").css("visibility", "visible");
			$("#listaErros").css("display", "block");
			for(i=0; i<listaErros.length; i++){
				erros += "<li>"+listaErros[i]+"</li>";				
			}
			erros += "</ul>";
			$("#listaErros").html(erros);
			return false;
		}else{
			$("#listaErros").html("");
			$("#listaErros").css("visibility", "hidden");
			$("#listaErros").css("display", "none");
			return true;
		}
	}

	
	function validaForm(){
		validado = 0;
		if(validaAba1()){			
			if(validaAba2()){				
				if(validaAba3()){
					validado = 1;
				}					
			}
		} 			
		if(validado == 1)
			return true;		
		else
			return false;
	}
	
	
	
	
	var containerId = '#tabs-container';
    var tabsId = '#tabs';    		    
    
    $("#botaoAba1").click(function(){    							
    	if(validaAba1()){
			$("#tabs #3").click();
			return false;
		}		    	
	});
    
    $("#botaoAba2").click(function(){    	
    	if(validaAba2()){
			$("#tabs #4").click();
			return false;
		}
	});
    
    $("#botaoAba3").click(function(){      	
		if(validaAba3()){
			$("#tabs #5").click();
			return false;
		}
	});
    
    $("#botaoAba4").click(function(){      	
		if(validaForm()){
			$("#PfAddForm").submit();			
		}
		else
			return false;
	});
    
    
    mudarTab = function(numeroTab) {
		$("#tabs-container"+numeroTab).addClass('visivel');
		return false;
    };        

	// carrega aba no evento onload da pagina
	if($(tabsId + ' LI.abaAtiva A').length > 0){		
		ID = $(tabsId + ' LI.abaAtiva A').attr('id');
		mudarTab(ID);
	}

    $(tabsId + ' A').click(function(){    	
    	if($(this).parent().hasClass('abaAtiva')){
        	return false;
        }
    	else{    		
            //if($("#PfAddForm").valid()){
	    		// pricura a div que estiver visivel e deixa invisivel    			
	    		$("#conteudo").find(".visivel").each(function(){
	    			$(this).removeClass('visivel');
				});
	
	            $(tabsId + ' LI.abaAtiva').addClass('abaInativa');
	        	$(tabsId + ' LI.abaAtiva').removeClass('abaAtiva');
	
	            $(this).parent().addClass('abaAtiva');
	            $(this).parent().removeClass('abaInativa');        	
	
	        	ID = $(this).attr('id');
	    		mudarTab(ID);
            //}
            return false;
        }
    });
	
	function validaSubmit(){
		okTel = 0;				
		$(".telefones").find("input:text").each(function(){
			okTel = 1;			
		});
		if(okTel != 1){
			alert("informe o telefone");
			$("#PfTelefone").focus();
			return false;
		}
		return true;
	}	
	
  });