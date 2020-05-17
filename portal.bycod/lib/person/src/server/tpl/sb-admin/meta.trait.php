<table cellpadding="5" cellspacing="0" border="0" width="95%">
        <tr>
            <td colspan="3"><h3>OTROS DATOS</h3></td>
        </tr>
        <tr>
            <td><b>Denominación</b></td>
            <td><b>Valor</b></td>
            <td><b>Descripción</b></td>
        </tr>
            <?php
                $trs = '';
                if(isset($data['trait']) && is_array($data['trait'])) foreach($data['trait'] as $i){
                    $trs .= '<tr>';
                    $trs .= '<td>'.$i['title'].'</td>';
                    $trs .= '<td>'.$i['value'].'</td>';
                    $trs .= '<td>'.$i['note'].'</td>';
                    $trs .= '</tr>';
                }
                echo  $trs;
            ?>
    </table>