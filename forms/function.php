<?php
function get_dropdown($sql){
    include "../tools/conn.php";
    $ress = $conn->query($sql);
    if($ress->num_rows > 0){
        while($row = $ress->fetch_array()){
            ?>
    <option value="<?php echo $row[0]?>"><?php echo $row[1]?></option>
            <?php
        }
       
    } else{
        echo "<option>No data to display</option>";
    }
}

function get_sql($post){

    $tiro=count($post);
    $sql="call ";
    $i=1;
    foreach ($post as $key => $val) {
        if($i==1)
            $sql.="$val(";
        else if($i==$tiro)
            $sql.="'$val')";
        else
            $sql.="'$val',";
        $i++;
    }
    return $sql;
}

function viewTable($sql){
    include "../tools/conn.php";
    $res = $conn->query($sql);
    $fields = $res->fetch_fields();
    ?>
        <thead>
            <tr>
                <?php foreach ($fields as $key => $value): ?>
                    <th><?php echo $value->name; ?></th>
                <?php endforeach ?>
               
            </tr>
        </thead>
        <tbody>
            <?php while($row=$res->fetch_array(MYSQLI_NUM)): ?>
                <tr>
                    <?php foreach ($row as $key => $value): ?>
                        <td><?php echo $value; ?></td>
                    <?php endforeach ?>
                </tr>
            <?php endwhile; ?>
        </tbody>
   
    <?php
}
?>