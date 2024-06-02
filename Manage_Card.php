<?php include("Header.php");
?>

<?php


if($_SERVER["REQUEST_METHOD"]=="POST")
{
    if(isset($_POST['Cart']))
    {
        //echo"hello";
        if(isset($_SESSION['cart']))
        {
            $myitems=array_column($_SESSION['cart'],'Item_Name');
            if(in_array($_POST['Item_Name'],$myitems))
            {
                echo"<script>
                alert('Items Allready Added');
                
                window.location.href='Fashion_&_Beauty.php';
                </script>";
            }
            else
            
            {
            $count=count($_SESSION['cart']);
            $_SESSION['cart'][$count]=array('Item_Name'=>$_POST['Item_Name'],'Price'=>$_POST['Price'],'Quantity'=>1);
            echo"<script>
            alert('Items Added Successfully');
            window.location.href='Fashion_&_Beauty.php';
            </script>";
            }
          

        }
        else
        {
            $_SESSION['cart'][0]=array('Item_Name'=>$_POST['Item_Name'],'Price'=>$_POST['Price'],'Quantity'=>1);
            echo"<script>
            alert('Items Added ');
            window.location.href='Fashion_&_Beauty.php';
            </script>";

        }
    }
    if(isset($_POST['Remove_Item']))
    {
        foreach($_SESSION['cart'] as $key => $value)
        {
            if($value['Item_Name']==$_POST['Item_Name'])
            {
                unset($_SESSION['cart'][$key]);
                $_SESSION['cart']=array_values($_SESSION['cart']);
                echo"<script>
                alert('Item Removed');
                window.location.href='My_Cart.php';
                </script>";
            }
        }

    }


}   

?>