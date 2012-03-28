	
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
	/*
	$("#btnRemoveTelefone").hide();
	$("#btnSalvarCurriculo").hide();
	$("#btnCancelarCurriculo").hide();
	$("#btnExcluirCurriculo").hide();
	*/
	//$("#removeEmail").hide();
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
	$("#PfPassaporte").mask("999999999");
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
	
	contadorDP = 0;
	$("#addGraducao").click(function(){	
		contadorDP++;		
		linhaGraduacao = "";
		//linhaGraduacao += "<tr><td class=\"celula1\"><br><input type=\"checkbox\" name=\"removerGraduacao\" value=\""+contadorDP+"\"></td>";
		linhaGraduacao += "<tr id=\"graduacao1\"><td width=\"80px\" class=\"celula1\"><label for=\"lblRsocial\">Ano Graduação</label><br>";		
		linhaGraduacao += "<div class=\"input text\"><input type=\"text\" id=\"PfAnoGraducao"+	contadorDP + "\" class=\"ano\" size=\"5\" maxlength=\"4\" name=\"data[Pf][ano_graducao][]\"></div></td>";
        linhaGraduacao += "<td align=\"left\"><label for=\"lblRsocial\">Curso</label>";
        linhaGraduacao += "<div class=\"input text\"><input type=\"text\" id=\"PfCurso"+ contadorDP + "\" size=\"72\" maxlength=\"100\" name=\"data[Pf][curso][]\"><input type=\"checkbox\" name=\"removerGraduacao\" value=\""+contadorDP+"\"></div></td></tr>";
        //linhaGraduacao += "<td class=\"celula1\" align=\"left\"><br><input type=\"checkbox\" name=\"removerGraduacao\" value=\""+contadorDP+"\"></td></tr>";
		$("#tableAddGraduacao").append(linhaGraduacao);
		$("#contadorDP").val(contadorDP);
		return false;
	})	
	
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
	})
	
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
	})
	
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
	})
	
	$("#removeTelefone").click(function(){
		$("#telefones").find("input:checkbox").each(function(){											
			if(this.checked){				
				linha = $(this).attr("value");
				$("#telefone"+linha).remove();				
			}																
		});
		return false;
	});
	
	
	
	$("#form1").validate({		            	            			            		
		rules: {				
			"data[Pf][nacionalidade_id]": { required: true },
			"data[Pf][naturalidade_id]": { required: true },
			"data[Pf][expedidor_rg_id]": { required: true },				
			"data[Pf][nome]": { required: true },			
			"data[Pf][nome_artistico]": { required: true },							
			"data[Pf][sexo]": { required: true },
			"data[Pf][cpf]": { required: true, cpf: true },
			"data[Pf][rg]": { required: true }
		}		
	});
	
	$("#form3").validate({		            	            			            		
		rules: {				
			"data[Pf][profissao]": { required: true }
		}		
	});
	
	
	$("#form4").validate({		            	            			            		
		rules: {				
			"data[Pf][logradouro]": { required: true },
			"data[Pf][numero]": { required: true },
			"data[Pf][complemento]": { required: true },
			"data[Pf][bairro]": { required: true },
			"data[Pf][cep]": { required: true },
			"data[Pf][comprovante]": { required: true },								
			"data[Pf][email]" : { required: true, email: true }
		},
		submitHandler: function(form) {
			v = validaSubmit();				
			if(v == true){
				form.submit();
			}
			//return false;
		}			
	});
	
	
	var containerId = '#tabs-container';
    var tabsId = '#tabs';    	
	    
    
    $(".botaoAba1").click(function(){     	
		if($("#PfAddForm").valid()){
			$("#tabs #2").click();
			return false;
		}
	});
    
    $(".botaoAba2").click(function(){    	
		if($("#PfAddForm").valid()){
			$("#tabs #3").click();
			return false;
		}
	});
    
    $(".botaoAba3").click(function(){      	
		if($("#PfAddForm").valid()){
			$("#tabs #4").click();
			return false;
		}
	});    
    
    $(".botaoAba4").click(function(){    	
		$("#PfAddForm").valid();		
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

	
	
	
	
	
	
	
	
	
	
	
	
	
	$("#PfNaturalizado").change(function(){
		if($(this).val() == "S")
			$("#divNaturalizacao").show();		
		else
			$("#divNaturalizacao").hide();
	});
	
	// verifica se tem mais de 9 elos por ocupação
	function validaElo(){
		checkElo = 0;		
		$("#PfEloId").find("option").each(function(){															
			if(this.selected){				
				checkElo++;
			}																		
		});		
		if(checkElo > 9){
			alert("Cada ocupação só pode ter até 9 elos");
			$("#PfEloId").focus();
			return false;
		}
		return true;
	}
	
	function validaSubmit(){
		okTel = 0;				
		ve = validaElo();				
		if(ve != true){
			return false;
		}
		
		//$("#PfAtividade").val($("#divComboCBO #PfAtividadeId").val());
		//$("#PfElo").val($("#divComboElo #PfEloId").val());
		
		
		//pega os campos que estão no ajax de area de atuação e joga pra pagina principal
		$("#listaElos table").find("tr .inputAno").each(function(){						
			inputAno = "<input type=\"hidden\" name=\"inputAno[]\" value=\"" + $(this).val() + "\">";
			$("#listaCurriculos").append(inputAno);																				
		});
		$("#listaElos table").find("tr .inputSegmento").each(function(){			
			inputSegmento = "<input type=\"hidden\" name=\"inputSegmento[]\" value=\"" + $(this).val() + "\">";
			$("#listaCurriculos").append(inputSegmento);																				
		});
		$("#listaElos table").find("tr .inputAtividade").each(function(){																		
			inputAtividade = "<input type=\"hidden\" name=\"inputAtividade[]\" value=\"" + $(this).val() + "\">";
			$("#listaCurriculos").append(inputAtividade);																				
		});
		$("#listaElos table").find("tr .inputElo").each(function(){																		
			inputElo = "<input type=\"hidden\" name=\"inputElo[]\" value=\"" + $(this).val() + "\">";
			$("#listaCurriculos").append(inputElo);																				
		});
		
		
		
		$(".telefones").find("input:text").each(function(){
			okTel = 1;			
		});
		if(okTel != 1){
			alert("informe o telefone");
			$("#btnAddTelefone").focus();
			return false;
		}
		return true;
	}	
	/*		
	$("#PfAddForm").validate({		            	            			            		
			rules: {				
				"data[Pf][pais_id]": { required: true },
				"data[Pf][naturalidade]": { required: true },
				"data[Pf][rg_expedidor]": { required: true },																								
				"data[Pf][nome_artistico]": { required: true },								
				"data[Pf][sexo]": { required: true },
				"data[Pf][cpf]": { required: true, cpf: true },
				"data[Pf][rg]": { required: true },
				"data[Pf][profissao]": { required: true },
				"data[Pf][logradouro]": { required: true },
				"data[Pf][numero]": { required: true },				
				"data[Pf][complemento]": { required: true },				
				"data[Pf][bairro]": { required: true },		
				"data[Pf][cidade]": { required: true },
				"data[Pf][cep]": { required: true },												
				"data[Pf][email]" : { required: true, email: true }
			}		
			submitHandler: function(form) {
				v = validaSubmit();				
				if(v == true){
					form.submit();
				}
				//return false;			
	});  	
	*/
	/*
	var pf_rules = {                                                                    
            rules: {
                "data[Pf][nacionalidade_id]": { required: true },
                "data[Pf][naturalidade_id]": { required: true },
                "data[Pf][expedidor_rg_id]": { required: true },
                "data[Pf][cidade_id]": { required: true },                
                "data[Pf][escolaridade_id]": { required: true },
                "data[Pf][pais_id]": { required: true },
                "data[Pf][nome]": { required: true, minlenght: 2 },                                                    
                "data[Pf][nome_artistico]": { required: true, minlenght: 2 },
                "data[Pf][sexo]": { required: true },
                "data[Pf][cpf]": { required: true, cpf: true },
                "data[Pf][rg]": { required: true, minlenght: 2 },
                "data[Pf][profissao]": { required: true, minlenght: 2 },
                "data[Pf][logradouro]": { required: true, minlenght: 2 },
                "data[Pf][numero]": { required: true, minlenght: 2 },
                "data[Pf][complemento]": { required: true, minlenght: 2 },
                "data[Pf][bairro]": { required: true, minlenght: 2 },
                "data[Pf][cep]": { required: true, minlenght: 2 },
                "data[Pf][comprovante]": { required: true, minlenght: 2 },
                "data[Pf][email]" :    { required: true, email: true }            
            }                                            
    };
    $("#PfAddForm").validate(pf_rules); 	
	*/
	/*
	var curriculo_rules = {     
          rules: {
                "data[Curriculo][descricao]": { required: true },
                "data[Curriculo][organizacao_responsavel]": { required: true }                            
          }
      };
      */
      
	
	
      function validaCurriculo(){
	      //var retorno = 1;      	
	      	if($("#CurriculoDescricao").val() == ""){
	      		alert("Inform a descrição");
	      		$("#CurriculoDescricao").focus();	      			      	
	      		return false;
	      	}	      	
	      	if($("#CurriculoOrganizacaoResponsavel").val() == ""){
	      		alert("Inform o organizador responsável");
	      		$("#CurriculoOrganizacaoResponsavel").focus();	      		
	      		return false;
	      	}	      	
	      	
	      	checkProduto = false;
	      	$("#ProdutoProduto").find("option").each(function(){															
				if(this.selected){				
					checkProduto = true;
				}																		
			});
			checkFuncao = false;
			$("#CurriculoFuncaoExercidaId").find("option").each(function(){															
				if(this.selected){				
					checkFuncao = true;
				}																		
			});		
			if(!checkProduto){
				alert("Selecione os Produtos");
				$("#ProdutoProduto").focus();						
				return false;			
			}
			if(!checkFuncao){
				alert("Selecione a função");
				$("#CurriculoFuncaoExercidaId").focus();				
				return false;			
			}			
			//return retorno;     			
      }
	
					
	
	
	$("#PfEmail").blur(function(){
		//$("#PfAtividade").val($("#divComboCBO #PfAtividadeId").val());
		//$("#PfElo").val($("#divComboElo #PfEloId").val());
		
		$("#listaCurriculos table").find("tr .or").each(function(){																		
			inputOr = "<input type=\"hidden\" name=\"or[]\" value=\"" + $(this).text() + "\">";
			$("#listaCurriculos").append(inputOr);																				
		});
		$("#listaCurriculos table").find("tr .dt").each(function(){																		
			inputDt = "<input type=\"hidden\" name=\"dt[]\" value=\"" + $(this).text() + "\">";
			$("#listaCurriculos").append(inputDt);													
		});
		$("#listaCurriculos table").find("tr .funcaoId").each(function(){																		
			inputFuncao = "<input type=\"hidden\" name=\"funcao[]\" value=\"" + $(this).text() + "\">";
			$("#listaCurriculos").append(inputFuncao);													
		});
		$("#listaCurriculos table").find("tr .produtoId").each(function(){																		
			inputProdutos = "<input type=\"hidden\" name=\"produtos[]\" value=\"" + $(this).val() + "\">";
			$("#listaCurriculos").append(inputProdutos);													
		});
		$("#listaCurriculos table").find("tr .descricao").each(function(){																		
			inputDescricao = "<input type=\"hidden\" name=\"descricao[]\" value=\"" + $(this).text() + "\">";
			$("#listaCurriculos").append(inputDescricao);													
		});
		
		
	});
	
	
			
	// antes de submeter formulario verifica se o telefone foi informado	
	/*
	$("#PfAddForm").submit(function(){
		okTel = 0;
		
		$("#PfAtividade").val($("#divComboCBO #PfAtividadeId").val());
		$("#PfElo").val($("#divComboElo #PfEloId").val());		
		
		$(".telefones").find("input:text").each(function(){
			okTel = 1;			
		});
		if(okTel != 1){
			alert("informe o telefone");
			$("#btnAddTelefone").focus();
			return false;
		}									
	});			
	*/
	
	
	//carrega combobox atividade
	$("#PfSegmentoId").change(function(){		
		var segmento = $(this).val();
		if(segmento != ""){
			$.get("/cadastro_cultural/pfs/combo_cbo/"+segmento+"", {		    
			    }, function(resposta){
			        //Tratamento dos dados de retorno
	    			$("#divComboCBO").html(resposta); 	   
			   }
			);	        									
		}
		else{
			respostaCbo = "";
			respostaCbo += "<label for=\"PfAtividade\">Atividade</label>";
			respostaCbo += "<select id=\"PfAtividade\" name=\"data[Pf][atividade]\">";
			respostaCbo += "<option value=\"0\">Selecione um Segmento</option>";
			respostaCbo += "</select>";			
			
			respostaElo = "";
			respostaElo += "<label for=\"PfElo\">Elo</label>";
			respostaElo += "<select id=\"PfElo\" name=\"data[Pf][elo]\">";
			respostaElo += "<option value=\"0\">Selecione uma Atividade</option>";
			respostaElo += "</select>";
			
			$("#divComboCBO").html(respostaCbo);
			$("#divComboElo").html(respostaElo);
			
			$("#PfAtividade").val("");
			$("#PfElo").val("");			
		}
	});		
	
	
	
	//adiciona campos de telefones adicionais
	var qtdTel = 0;
	$("#btnAddTelefone").click(function(){
		qtdTel++;		
		var inputTelefone = "";
		if(qtdTel == 1)
			$("#btnRemoveTelefone").show();
							
		inputTelefone += "<span style=\"margin:8px; display:block;\"><input type=\"checkbox\" name=\"removerTelefone\" value=\"\"><input type=\"text\" id=\"\" maxlength=\"13\" name=\"data[Pf][telefone][]\" class=\"inputTelefone\"  onkeydown=\"formatTelefone(this, event)\" style=\"width:110px;\" /></span>";
		$(".telefones").append(inputTelefone);	
		$(".telefones input:text:last").attr("id","tel"+qtdTel);
		$(".telefones input:checkbox:last").attr("value",qtdTel);
		
	});
	
	
	
	
	function limpaCurriculo(){
		// limpa formulário do curriculo		
		 $(".curriculos #CurriculoAddForm").find(":input").each(function() {
		        switch(this.type) {
		            case "password":
		            case "select-multiple":
		            case "select-one":
		            case "text":
		            case "textarea":
		                $(this).val("");
		                break;
		            case "checkbox":
		            case "radio":
		                this.checked = false;
		        }
		 });			
	}
	
	
	// eventos ao clicar em salvar currículo
	$("#btnSalvarCurriculo").click(function(){		
		// verifica se todos os campos do form de curriculo foram preenchidos
		a = validaCurriculo();
		if(a == false)
			return false;		
			
		
		contadorCurriculos++;
		
		descricao = $(".curriculos #CurriculoDescricao").val();
		organizacao = $(".curriculos #CurriculoOrganizacaoResponsavel").val();
		data = $(".curriculos #CurriculoDataDay").val() + "/" + $(".curriculos #CurriculoDataMonth").val() + "/" + $(".curriculos #CurriculoDataYear").val();
		dataFormatada = $(".curriculos #CurriculoDataYear").val() + "-" + $(".curriculos #CurriculoDataDay").val() + "/" + $(".curriculos #CurriculoDataMonth").val();		
		produtoId = $(".curriculos #ProdutoProduto").val();
		$("#PfContadorCurriculo").val(contadorCurriculos);
		
		produtos = "";		
		contador = 0;
		//pega os produtos selecionados
		$(".curriculos #ProdutoProduto").find("option").each(function(){															
			if(this.selected){				
				if(contador == 0)			
					produtos += this.text;
				else		
					produtos += " ," + this.text;												
				
				contador++; 									
			}																		
		});
		
		//pega função exercida		
		funcao = "";
		funcaoId = "";
		$(".curriculos #CurriculoFuncaoExercidaId").find("option").each(function(){														
			if(this.selected){											
				funcao += this.text;
				funcaoId += this.value;				
			}																		
		});						
		
				
		var tabelaListaCurriculos = "";		
		tabelaListaCurriculos += "<span class=\"txtExcluir\"><br><input type=\"checkbox\" value=\"" + contadorCurriculos + "\" />&nbsp;</span><br>";
		tabelaListaCurriculos += "<table id=\"tabelaCurriculo" + contadorCurriculos + "\">";
		tabelaListaCurriculos += "<tr><th>Organizaçõa Responsável</th><th>Data</th><th>Função Exercida</th><th>Produtos</th></tr>";
		tabelaListaCurriculos += "<tr><td class=\"or\">" + organizacao + "</td><td class=\"dt\">" + data + "</td><td class=\"funcao\">" + funcao + "</td><td class=\"produtos\">" + produtos + "</td></tr>";
		tabelaListaCurriculos += "<tr><th colspan=\"4\" align=\"center\" class=\"descricao\">Descrição</th></tr><tr><td colspan=\"4\">" + descricao + "</td></tr>";
		tabelaListaCurriculos += "<input type=\"hidden\" name=\"funcaoId[]\" class=\"funcaoId\" value=\"" + funcaoId + "\">";
		tabelaListaCurriculos += "<input type=\"hidden\" name=\"ProdutoId[]\" class=\"produtoId\" value=\"" + produtoId + "\">";				
		//tabelaListaCurriculos += "<input type=\"hidden\" name=\"dataFormatada[]\" value=\"" + dataFormatada + "\">";
		tabelaListaCurriculos += "</table>";		
		
		
		// limpa formulário do curriculo
		limpaCurriculo();		
		
		$(".curriculos #divFormCurriculo").hide();
		$(".curriculos #listaCurriculos").append(tabelaListaCurriculos);
		$(this).hide();	
		$("#btnAddCurriculo").show();		
		$("#btnExcluirCurriculo").show();		
		$("input:checkbox").focus();
	});
	
	
	$("#btnCancelarCurriculo").click(function(){
		limpaCurriculo();
		$(".curriculos #divFormCurriculo").hide();
	});
	
		
	//remove curriculos
	$("#btnExcluirCurriculo").click(function(){
		if(confirm("Deseja realmente excluir os currículos selecionados?")) {		 			
			$(".curriculos #listaCurriculos").find("input:checkbox").each(function(){											
				if(this.checked){				
					idCurriculo = $(this).attr("value");
					$(this).remove();
					$("#tabelaCurriculo"+idCurriculo).remove();				
				}																
			});
		}
		
	});	
		
	
	//remove campos de telefone
	$("#btnRemoveTelefone").click(function(){
		$(".telefones").find("input:checkbox").each(function(){											
			if(this.checked){				
				linha = $(this).attr("value");
				$(".txtExcluir").remove();
				//$(this).remove();
				$("#tel"+linha).remove();
				$(this).remove();
			}																
		});
	});
	
	
	// adiciona formulario de cadastro de curriculo	
	$("#btnAddCurriculo").click(function(){
		$(".curriculos #divFormCurriculo").show();
		$("#loading").show();	
		$("#btnAddCurriculo").hide();		
		$.get("/cadastro_cultural/curriculos/add", {           		   
     		    }, function(resposta){
   		        //Tratamento dos dados de retorno
					$("#loading").hide();   		        	
           			$(".curriculos #divFormCurriculo").html(resposta); 
           			//$(".curriculos #divFormCurriculo").html(resposta).find($(".curriculos #CurriculoAddForm")).validate(curriculo_rules); 
       		   }
       	);	       	
       	$("#btnSalvarCurriculo").show();
       	$("#btnCancelarCurriculo").show();
	});		
  });