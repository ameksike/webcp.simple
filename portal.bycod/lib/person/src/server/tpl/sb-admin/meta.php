
<table cellpadding="5" cellspacing="0" border="0" width="95%">
    <tr>
        <td colspan="3"><h3>PERFIL</h3></td>
    </tr>
    <tr>
        <td width="25%"><b>Foto</b></td> 
        <td><b>Denominación</b></td>
        <td><b>Valor</b></td>
    </tr>
    <tr>
        <td rowspan="12"> <img class="profilea" src="<?php echo $data['person']['avatar'];?>"></td>
    </tr>
    <tr> 
        <td>Correo</td>
        <td><?php echo $data['person']['email'];?></td>
     <tr>
    <tr> 
        <td>Chats</td>
        <td><?php echo $data['person']['chat'];?></td>
    <tr>
    <tr> 
        <td>Empresa</td>
        <td><?php echo $data['person']['company'];?></td>
    <tr>
    <tr> 
        <td>Departamento</td>
        <td><?php echo $data['person']['place'];?></td>
    <tr>
    <tr> 
        <td>Cargo</td> 
        <td><?php echo $data['person']['position'];?></td>
    <tr>
    <tr> 
        <td>Categor&iacute;a</td>
        <td><?php echo $data['person']['category'];?></td> 
    <tr>
</table>

<?php
    if(isset($data['trait']) && is_array($data['trait'])) include __DIR__ . "/meta.trait.php";
?>
<?php
    if(isset($data['phonebook']) && is_array($data['trait'])) include __DIR__ . "/meta.phonebook.php";
?>