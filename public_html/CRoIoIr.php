<?php
    error_reporting(E_ERROR | E_PARSE);
    $headers = array("Planety", "Material", "Vitr");
    $data[] = array("planeta" => "Jill", "material" => 10, "vitr" => 50);
    $data[] = array("planeta" => "Eve", "material" => 15, "vitr" => 94);
    $data[] = array("planeta" => "Adam", "material" => 25, "vitr" => 67);

    $planeta = array_column($data, "planeta");
    $material = array_column($data, "material");
    $vitr = array_column($data, "vitr");
    
    if (isset($_GET)) {
        if ($_GET["planeta"] == "Asc") {
            array_multisort($planeta, SORT_DESC, $material, $vitr, $data);
        } elseif ($_GET["planeta"] == "Desc") {
            array_multisort($planeta, SORT_ASC, $material, $vitr, $data);
        } elseif ($_GET["material"] == "Asc") {
            array_multisort($material, SORT_DESC, $planeta, $vitr, $data);
        } elseif ($_GET["material"] == "Desc") {
            array_multisort($material, SORT_ASC, $planeta, $vitr, $data);
        } elseif ($_GET["vitr"] == "Asc") {
            array_multisort($vitr, SORT_DESC, $material, $planeta, $data);
        } elseif ($_GET["vitr"] == "Desc") {
            array_multisort($vitr, SORT_ASC, $material, $planeta, $data);
        }
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Table</title>
    </head>
    <body>
        <table>
            <tr>
                <td>
                    <?php
                        if (!isset($_GET)) {
                            $value = "Sort";
                        } else {
                            if ($_GET["planeta"] == "Sort") {
                                $value = "Asc";
                            } elseif ($_GET["planeta"] == "Asc") {
                                $value = "Desc";
                            } elseif ($_GET["planeta"] == "Desc") {
                                $value = "Asc";
                            } else {
                                $value = "Sort";
                            }
                        }
                        echo "<form method='get' action='index.php'><input type='submit' name='planeta' value='$value' /></form>";
                    ?>
                </td>
                <td>
                    <?php
                        if (!isset($_GET)) {
                            $value = "Sort";
                        } else {
                            if ($_GET["material"] == "Sort") {
                                $value = "Asc";
                            } elseif ($_GET["material"] == "Asc") {
                                $value = "Desc";
                            } elseif ($_GET["material"] == "Desc") {
                                $value = "Asc";
                            } else {
                                $value = "Sort";
                            }
                        }
                        echo "<form method='get' action='index.php'><input type='submit' name='material' value='$value' /></form>";
                    ?>
                </td>
                <td>
                    <?php
                        if (!isset($_GET)) {
                            $value = "Sort";
                        } else {
                            if ($_GET["vitr"] == "Sort") {
                                $value = "Asc";
                            } elseif ($_GET["vitr"] == "Asc") {
                                $value = "Desc";
                            } elseif ($_GET["vitr"] == "Desc") {
                                $value = "Asc";
                            } else {
                                $value = "Sort";
                            }
                        }
                        echo "<form method='get' action='index.php'><input type='submit' name='vitr' value='$value' /></form>";
                    ?>    
                </td>
            </tr>
            <tr>
                <?php
                    for ($i=0; $i < count($headers); $i++) { 
                        echo "<th>$headers[$i]</th>";
                    }    
                ?>
            </tr>
            <?php
                for ($i=0; $i < count($data); $i++) { 
                    echo "<tr><td>$planeta[$i]</td><td>$material[$i]</td><td>$vitr[$i]</td></tr>";
                }
            ?>
        </table>
    </body>
</html>
<style>
    table {
        border-collapse: collapse;
    }
    td, th {
        border: 1px solid #000000;
        text-align: center;
        padding: 5px;
        width: 6rem;
    }
    tr:nth-child(even) {
        background-color: #ccc;
    }
</style>