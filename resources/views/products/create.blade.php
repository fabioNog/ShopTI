<h3>Insert new Products</h3>

<form action="{{route('products.store')}}" method="POST">
    <input type="text" name="prod_nome">
    <input type="submit" value="Save">
</form>