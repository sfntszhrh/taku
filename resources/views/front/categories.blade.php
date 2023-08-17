<!DOCTYPE html>
<html>
<head>
    <title>Categories</title>
</head>
<body>
    <h1>Dropdown Menu Example</h1>
    <form>
        <label for="dropdown">Select an option:</label>
        <select id="dropdown" name="dropdown">
            @foreach($options as $option)
                <option value="{{ $option->value }}">{{ $option->label }}</option>
            @endforeach
        </select>  
    </form>
</body>
</html>
