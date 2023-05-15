@extends('Layouts.main')
<head>
<!-- <meta http-equiv="refresh" content="30" > -->
@section('title', 'monitor')
</head>
@section('content')
<br>
<h3><center>Tabel Monitoring Jaringan</center></h3>
<br>
    <table class="table">
        <tr>
            <td>No.</td>
            <td>Komputer</td>
            <td>IP Address</td>
            <td>Status</td>
        </tr>
        <?php
            $ip_addr = array(array('Server Google', '8.8.8.8'), 
                        array('Komputer User','192.168.106.51'),
                        array('Komputer Server','192.168.106.1'),
                        array('Komputer Server 2', '192.168.1.1'));
            $i = count ($ip_addr);
            for($j=0;$j<$i;$j++){
                $ip = $ip_addr[$j][1];
                $ping = exec("ping -n 1 $ip", $output, $status);
                $hasil[] = $status;
            }
            foreach($hasil as $item => $k){
                echo '<tr>';
                echo '<td>'.$item.'</td>';
                echo '<td>'.$ip_addr[$item][0].'</td>';
                echo '<td>'.$ip_addr[$item][1].'</td>';
                echo '<td>'.$hasil[$item].'</td>';
                // if($hasil[$item]==0){
                //     echo "<td class='text-success'>Online</td>";
                // }
                // else{
                //     echo "<td class='text-danger'>Offline</td>";
                // }
                echo '</tr>';
            }
        ?>
    </table>
@endsection
