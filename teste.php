<html>
 <head>
 <title> Aproveitamento dos estudantes no exterior </title>
 <style type="text/css">
<!--
.style1 {
  color: #FF0000;
  font-size: x-small;
}
.style3 {color: #0000FF; font-size: x-small; }
-->
</style>
 

 <meta name="description" content="Aprenda a criar um site completo que usa formulários em HTML">
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8"> 
 </head>

 <body>
  <center><h1> Aproveitamento dos estudantes no exterior</h1></center> 
  <h2> Preencha o formulário abaixo com seus dados</h2><br />

<form action="" method="post">

<!-- DADOS PESSOAIS-->
<fieldset>
 <h4><legend>Dados Pessoais</legend></h4>
 <table cellspacing="10">
  <tr>
   <td>
    <label for="nome">Nome: </label>
   </td>
   <td align="left">
    <input type="text" name="email">
   </td>
   <td>
    <label for="sobrenome">Sobrenome: </label>
   </td>
   <td align="left">
    <input type="text" name="sobrenome">
   </td>
  </tr>
  <tr>
   <td>
    <label for="estado">Data de nascimento:</label>
   </td>
   <td align="left">

  <label for="day_start"></label>
  <select id="day_start"
          name="day_start" />
    <option>Selecione</option>
    <option>1</option>      
    <option>2</option>      
    <option>3</option>      
    <option>4</option>      
    <option>5</option>      
    <option>6</option>      
    <option>7</option>      
    <option>8</option>      
    <option>9</option>      
    <option>10</option>      
    <option>11</option>      
    <option>12</option>      
    <option>13</option>      
    <option>14</option>      
    <option>15</option>      
    <option>16</option>      
    <option>17</option>      
    <option>18</option>      
    <option>19</option>      
    <option>20</option>      
    <option>21</option>      
    <option>22</option>      
    <option>23</option>      
    <option>24</option>      
    <option>25</option>      
    <option>26</option>      
    <option>27</option>      
    <option>28</option>      
    <option>29</option>      
    <option>30</option>      
    <option>31</option>      
  </select>
  <label for="month_start"></label>
  <select id="month_start"
          name="month_start" />
    <option>Selecione</option>
    <option>Janeiro</option>      
    <option>Fevereiro</option>      
    <option>Março</option>      
    <option>Abril</option>      
    <option>Maio</option>      
    <option>Junho</option>      
    <option>Julho</option>      
    <option>Agosto</option>      
    <option>Setembro</option>      
    <option>Outubro</option>      
    <option>Novembro</option>      
    <option>Dezembro</option>      
  </select> 
  <label for="year_start"></label>
  <select id="year_start"
         name="year_start" />
    <option>Selecione</option>
    <option>2019</option>      
    <option>2018</option>      
    <option>2017</option>      
    <option>2016</option>      
    <option>2015</option>      
    <option>2014</option>      
    <option>2013</option>      
    <option>2012</option>      
    <option>2011</option>      
    <option>2010</option>
    <option>2009</option>      
    <option>2008</option>      
    <option>2007</option>      
    <option>2006</option>      
    <option>2005</option>      
    <option>2004</option>      
    <option>2003</option>      
    <option>2002</option>      
    <option>2001</option>      
    <option>2000</option>
    <option>1999</option>      
    <option>1998</option>      
    <option>1997</option>      
    <option>1996</option>      
    <option>1995</option>      
    <option>1994</option>      
    <option>1993</option>      
    <option>1992</option>      
    <option>1991</option>      
    <option>1990</option>
    <option>1989</option>      
    <option>1988</option>      
    <option>1987</option>      
    <option>1986</option>      
    <option>1985</option>      
    <option>1984</option>      
    <option>1983</option>      
    <option>1982</option>      
    <option>1981</option>      
    <option>1980</option>      
  </select>
  <span class="inst"></span>


    <!--<input type="text" name="dia" size="2" maxlength="2" value="dd"> 
   <input type="text" name="mes" size="2" maxlength="2" value="mm"> 
   <input type="text" name="ano" size="4" maxlength="4" value="aaaa">-->
   </td>
  </tr>

  <tr>
   <td>
    <label for="bairro">Nacionalidade: </label>
   </td>
   <td align="left">
    <input type="text" name="bairro">
   </td>
  </tr>
  <tr>
  <!-- <td>
    <label>CPF:</label>
   </td>
   <td align="left">
    <input type="text" name="cpf" size="9" maxlength="9"> - <input type="text" name="cpf2" size="2" maxlength="2">
   </td>
  </tr>-->
 </table>
</fieldset>

<br />
<!-- ENDEREÇO -->
<fieldset>
 <h4><legend>Dados de endereço atual</legend></h4>
 <table cellspacing="10">
  <tr>
   <td>
    <label for="pais">País:</label>
   </td>
   <td align="left">
    <select name="estado"> 
    <option>Selecione...</option>
    <option value="au">Australia</option> 
    <option value="br">Brasil</option> 
    <option value="ch">China</option> 
    <option value="cb">Cuba</option> 
    <option value="am">Estados Unidos da América</option>
    <option value="fl">Filipina</option> 
    <option value="in">Indonésia</option>
    <option value="ml">Malasia</option>  
    <option value="nz">Nova Zelandia</option>
    <option value="th">Tailandia</option> 
    <option value="pt">Portugal</option> 
    
   </select>
   </td>
  </tr>

  <tr>
   <td>
    <label for="rua">Rua:</label>
   </td>
   <td align="left">
    <input type="text" name="rua">
   </td>
   <td>
    <label for="numero">Número:</label>
   </td>
   <td align="left">
    <input type="text" name="numero" size="4">
   </td>
  </tr>
  <tr>
   <td>
    <label for="bairro">Bairro: </label>
   </td>
   <td align="left">
    <input type="text" name="bairro">
   </td>
  </tr>
   <tr>
   <td>
    <label for="cidade">Cidade: </label>
   </td>
   <td align="left">
    <input type="text" name="cidade">
   </td>
  </tr>
  <tr>
      <td>Estado:</td>
      <td><select name="estado" id="estado">
        <option>Selecione...</option>
        <option value="AC">AC</option>
        <option value="AL">AL</option>
        <option value="AP">AP</option>
        <option value="AM">AM</option>
        <option value="BA">BA</option>
        <option value="CE">CE</option>
        <option value="ES">ES</option>
        <option value="DF">DF</option>
        <option value="MA">MA</option>
        <option value="MT">MT</option>
        <option value="MS">MS</option>
        <option value="MG">MG</option>
        <option value="PA">PA</option>
        <option value="PB">PB</option>
        <option value="PR">PR</option>
        <option value="PE">PE</option>
        <option value="PI">PI</option>
        <option value="RJ">RJ</option>
        <option value="RN">RN</option>
        <option value="RS">RS</option>
        <option value="RO">RO</option>
        <option value="RR">RR</option>
        <option value="SC">SC</option>
        <option value="SP">SP</option>
        <option value="SE">SE</option>
        <option value="TO">TO</option>
          </select>
        <span class="style1">*      </span></td>
    </tr>
  
 
  <tr>
   <td>
    <label for="cep">CEP: </label>
   </td>
   <td align="left">
    <input type="text" name="cep" size="5" maxlength="5"> - <input type="text" name="cep2" size="3" maxlength="3">
   </td>
  </tr>
  <tr>
   <td>
    <label for="cidade">Universidade: </label>
   </td>
   <td align="left">
    <input type="text" name="cidade">
   </td>
  </tr>
 </table>
</fieldset>
<br />

<!-- DADOS DE LOGIN -->
<fieldset>
 <h4><legend>Dados de login</legend></h4>
 <table cellspacing="10">
  
  <tr>
   <td>
    <label for="imagem">Imagem de perfil:</label>
   </td>
   <td>
    <input type="file" name="imagem" >

   </td>
  </tr>
  <tr>
   <td>
    <label for="login">E-mail: </label>
   </td>
   <td align="left">
    <input type="text" name="login">
   </td>
  </tr>
  <tr>
   <td>
    <label for="pass">Senha: </label>
   </td>
   <td align="left">
    <input type="password" name="pass">
   </td>
  </tr>
  <tr>
   <td>
    <label for="passconfirm">Confirme a senha: </label>
   </td>
   <td align="left">
    <input type="password" name="passconfirm">
   </td>
  </tr>
 </table>
</fieldset>
<br />
<input type="submit" value="Salvar">
<input type="reset" value="Limpar">
</form>

 </body>
</html>