	
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
	$("#btnRemoveTelefone").hide();
	$("#btnSalvarCurriculo").hide();
	$("#btnExcluirCurriculo").hide();	
	$("#PfCpf").mask("999.999.999-99");
	$("#PfRg").mask("99999999-99");
	$("#PfCep").mask("99999-999");		
	$("#PfRepresentanteTelefone").mask("(99)9999-9999");
	$("#PfRepresentanteCelular").mask("(99)9999-9999");
	$("#PfFax").mask("(99)9999-9999");
	var contadorCurriculos = 0;
	
	
	function validaSubmit(){
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
		return true;
	}	
		
	
	$("#PfAddForm").validate({		            	            			            		
			rules: {				
				"data[Pf][nacionalidade_id]": { required: true },
				"data[Pf][naturalidade_id]": { required: true },
				"data[Pf][expedidor_rg_id]": { required: true },
				"data[Pf][cidade_id]": { required: true },				
				"data[Pf][escolaridade_id]": { required: true },
				"data[Pf][pais_id]": { required: true },	
				"data[Pf][segmento_id]": { required: true },
				"data[Pf][atividade_id]": { required: true },
				"data[Pf][elo_id]": { required: true },
				"data[Pf][nome_artistico]": { required: true },				
				"data[Pf][email]" :	{ required: true, email: true },	
				"data[Pf][sexo]": { required: true },
				"data[Pf][cpf]": { required: true, cpf: true },
				"data[Pf][rg]": { required: true },
				"data[Pf][profissao]": { required: true },
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
		$("#PfAtividade").val($("#divComboCBO #PfAtividadeId").val());
		$("#PfElo").val($("#divComboElo #PfEloId").val());
		
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
		$.get("/cadastro_cultural/pfs/combo_cbo/"+segmento+"", {		    
		    }, function(resposta){
		        //Tratamento dos dados de retorno
    			$("#divComboCBO").html(resposta); 	   
		   }
		);	        									
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
		
		
		$(".curriculos #divFormCurriculo").hide();
		$(".curriculos #listaCurriculos").append(tabelaListaCurriculos);
		$(this).hide();	
		$("#btnAddCurriculo").show();		
		$("#btnExcluirCurriculo").show();		
		$("input:checkbox").focus();
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
	});		
  });