<table cellpadding="5" cellspacing="0" border="0" width="95%">
        <tr> 
            <td colspan="5"><h3>TELEFONOS</h3></td>
        </tr>
        <tr>
            <td><b>Denominación</b></td>
            <td><b>Número</b></td>
            <td><b>Extensión</b></td>
            <td><b>Notas</b></td>
            <td><b>Tipo</b></td>
        </tr>
        <?php
            
            $trs = '';
            if(isset($data['phonebook']) && is_array($data['trait'])) foreach($data['phonebook'] as $i){
                $trs .= '<tr>';
                $trs .= '<td>'.$i['title'].'</td>';
                $trs .= '<td>'.$i['value'].'</td>';
                $trs .= '<td>'.$i['extension'].'</td>';
                $trs .= '<td>'.$i['note'].'</td>';
                $trs .= '<td>'.(($i['type']=='fixed') ? 'Fijo':'Mobil').'</td>';
                $trs .= '</tr>';
            }
            echo  $trs;
        ?>
    </table>