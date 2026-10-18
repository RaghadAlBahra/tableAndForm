<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Product</title>
</head>
<body>
    <h2>Create Product</h2>

    <form action="{{ route('products.store') }}" method="POST">
        @csrf

        <div>
            <label>Product Name:</label><br>
            <input type="text" name="name" value="{{ old('name') }}">
        </div>
        <br>

        <div>
            <label>Price:</label>
            <br>
            <input type="number" step="1" name="price" value="{{ old('price') }}">
        </div>
        <br>

        <div>
            <label>Category:</label><br>
<select name="category">
    <option value="">Select Category</option>
    <option value="Electronics" {{ old('category') == 'Electronics' ? 'selected' : '' }}>Electronics</option>
    <option value="Clothes" {{ old('category') == 'Clothes' ? 'selected' : '' }}>Clothes</option>
    <option value="Accessories" {{ old('category') == 'Accessories' ? 'selected' : '' }}>Accessories</option>
</select>
        </div>
        <br>

        <div>
            <label>Description:</label><br>
            <textarea name="description">{{ old('description') }}</textarea>
        </div>
        <br>

<button type="submit">Save Product</button>


    </form>
</body>
</html>
