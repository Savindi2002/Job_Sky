<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User Applications</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        th, td {
            padding: 12px;
            border-bottom: 1px solid #ddd;
            text-align: left;
        }

        th {
            font-weight: bold;
        }

        .user-image {
            width: 30px;
            height: 30px;
            border-radius: 50%;
            vertical-align: middle;
            margin-right: 8px;
        }

        .resume-button {
            background-color: #e7f0ff;
            color: #007bff;
            padding: 6px 12px;
            border-radius: 5px;
            border: none;
            cursor: pointer;
            font-size: 14px;
        }

        .action-dots {
            font-size: 20px;
            cursor: pointer;
        }
    </style>
</head>
<body>

    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>User Name</th>
                <th>Job Title</th>
                <th>Location</th>
                <th>Resume</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td><img src="https://via.placeholder.com/30" alt="User" class="user-image">Richard Sanford</td>
                <td>Full Stack Developer</td>
                <td>Bangalore</td>
                <td><button class="resume-button">Resume ⬇️</button></td>
                <td class="action-dots">...</td>
                ...
                 {{-- <td>
                    <select style={} name="category_1">
            <option value="">Select Category</option>
            @foreach($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
        </select> --}}
                 {{-- </td> --}}

         
    </td>

            </tr>
            <tr>
                <td>2</td>
                <td><img src="https://via.placeholder.com/30" alt="User" class="user-image">Enrique Murphy</td>
                <td>Data Scientist</td>
                <td>San Francisco</td>
                <td><button class="resume-button">Resume ⬇️</button></td>
                <td class="action-dots">...</td>
            </tr>
            <tr>
                <td>3</td>
                <td><img src="https://via.placeholder.com/30" alt="User" class="user-image">Alison Powell</td>
                <td>Marketing Manager</td>
                <td>London</td>
                <td><button class="resume-button">Resume ⬇️</button></td>
                <td class="action-dots">...</td>
            </tr>
            <tr>
                <td>4</td>
                <td><img src="https://via.placeholder.com/30" alt="User" class="user-image">Richard Sanford</td>
                <td>UI/UX Designer</td>
                <td>Dubai</td>
                <td><button class="resume-button">Resume ⬇️</button></td>
                <td class="action-dots">...</td>
            </tr>
            <tr>
                <td>5</td>
                <td><img src="https://via.placeholder.com/30" alt="User" class="user-image">Enrique Murphy</td>
                <td>Full Stack Developer</td>
                <td>Hyderabad</td>
                <td><button class="resume-button">Resume ⬇️</button></td>
                <td class="action-dots">...</td>
            </tr>
            <tr>
                <td>6</td>
                <td><img src="https://via.placeholder.com/30" alt="User" class="user-image">Alison Powell</td>
                <td>Data Scientist</td>
                <td>New Delhi</td>
                <td><button class="resume-button">Resume ⬇️</button></td>
                <td class="action-dots">...</td>
            </tr>
            <tr>
                <td>7</td>
                <td><img src="https://via.placeholder.com/30" alt="User" class="user-image">Richard Sanford</td>
                <td>Marketing Manager</td>
                <td>Chennai</td>
                <td><button class="resume-button">Resume ⬇️</button></td>
                <td class="action-dots">...</td>
            </tr>
        </tbody>
    </table>

</body>
</html>
