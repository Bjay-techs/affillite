
<div>
    {{-- Care about people's approval and you will be their prisoner. --}}
    <div>

    {{-- Because she competes with no one, no one can compete with her. --}}

<div class="container">
            <h2>admin Login <br>
                    <span>{{ $message??'' }}</span> 
                

            </h2>
            <form action="{{route('admin.login')}}" method="post">
               @csrf
            
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" id="email" placeholder="email" name="email" required> 
                </div>
                    <div class="form-group">
                    <label for="name">password:</label>
                    <input type="password" id="name" placeholder="password" name="password" required>
                       <!-- @error('password') <span>{{ $message }}</span> @enderror -->
                </div>
                <input type="submit" value="Login" >
            </form>
        </div>
    <style>
    .container {
        width: 100%;
        max-width: 600px;
        margin: 0 auto;
        padding: 20px;
        background-color: #f2f2f2;
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    h2 {
        text-align: center;
    }

    .form-group {
        margin-bottom: 15px;
    }

    label {
        display: block;
        font-weight: bold;
    }

    input[type="password"],

    input[type="email"] {
        width: 100%;
        padding: 8px;
        border: 1px solid #ccc;
        border-radius: 4px;
    }

    input[type="submit"] {
        width: 100%;
        padding: 10px;
        background-color: #4CAF50;
        color: #fff;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    input[type="submit"]:hover {
        background-color: #45a049;
    }

    /* Responsive Styles */
    @media screen and (max-width: 480px) {
        .container {
            padding: 10px;
        }

        input[type="submit"] {
            font-size: 14px;
        }
    }
    </style>

</div>

