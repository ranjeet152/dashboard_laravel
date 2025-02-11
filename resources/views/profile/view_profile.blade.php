@extends('layout.simple-hero')

@section('main-simple-page')

<style>
    .container {
        max-width: 900px;
        width: 100%;
        background: white;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        margin: auto;
    }

    .header {
        font-size: 24px;
        font-weight: bold;
        margin-bottom: 20px;
        margin-top: 20px;
        text-align: center;
    }

    .details {
        display: flex;
        flex-wrap: wrap;
        gap: 20px;
        justify-content: space-between;
    }

    .card {
        flex: 1;
        background: white;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        min-width: 300px;
    }

    .profile-section {
        display: flex;
        align-items: center;
        gap: 15px;
        margin-bottom: 20px;
    } 
    #profile-container {
        display: flex;
        align-items: center;
        gap: 40px;
        padding: 10px; 
        border-radius: 10px;
        width: fit-content;
        max-width: 100%;
    }

    #profile-pic {
        position: relative;
        width: 80px;
        height: 80px;
    }

    #profile-pic img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        border-radius: 50%;
        border: 2px solid #ddd;
    }

    .camera-icon {
        position: absolute;
        bottom: 1px;
        right: 1px;
        background: rgba(0, 0, 0, 0.6);
        color: white;
        font-size: 14px;
        padding: 5px;
        border-radius: 50%;
        cursor: pointer;
    }

    #user-name {
        font-size: 18px;
        font-weight: bold;
        color: #333;
    }

    /* 📱 Mobile Responsive */
    @media (max-width: 600px) {
        #profile-container {
            flex-direction: column;
            text-align: center;
        }

        #profile-pic {
            width: 100px;
            height: 100px;
        }
    }  

    .info-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        gap: 15px;
    }

    .btn-container {
        display: flex;
        justify-content: center;
        gap: 10px;
        margin-top: 20px;
        margin-bottom: 20px;
    }

    .btn {
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        font-weight: bold;
    }

    .label {
    font-size: 16px;
    font-weight: bold;
    color: #333;
  }

  .value {
    font-size: 18px;
  }

   .imagecheck-figure {
    width: 200px;
    height: 130px;
  }

    .info-grid {
        margin-top: 40px;
    }
    .btn-remove {
        background-color: #f44336;
        color: white;
    }

    .btn-edit {
        background-color: #6200ea;
        color: white;
    }

    @media (max-width: 600px) {
        .details {
            flex-direction: column;
        }

        .card {
            width: 100%;
        }
    }
</style>

<div class="container">
    <div class="header">Profile Details</div>
    <div class="details">
        <div class="card">
             
            <div id="profile-container">
           <div id="profile-pic"> 
        <div style="position: relative; display: inline-block;">
    <img id="profileImage" src="{{ asset('/storage/'.$user->image) }}" alt="Profile Picture">
    <label for="imageUpload" class="camera-icon">📷</label>
    <input type="file" id="imageUpload" style="display: none;" onchange="uploadImage()">
</div> 
        </div>
        <div id="user-name">{{ $user->username }}<br/><p>{{ $user->email }}</p></div> 
   </div>

            <div class="info-grid">
    <div>
        <div class="label">User Name:</div>
        <div class="value">{{ $user->username }}</div>
    </div>
    <div>
        <div class="label">Father's Name:</div>
        <div class="value">{{ $user->fathername }}</div>
    </div>
    <div>
        <div class="label">Mother's Name:</div>
        <div class="value">{{ $user->mothername }}</div>
    </div>
    <div>
        <div class="label">Date of Birth:</div>
        <div class="value">{{ $user->dob }}</div>
    </div>
    <div>
        <div class="label">Phone Number:</div>
        <div class="value">{{ $user->phone }}</div>
    </div>
    <div>
        <div class="label">Profile ID:</div>
        <div class="value">{{ $user->id }}</div>
    </div> 
</div>

        </div>

        <div class="card">
        <div class="info-grid">
    <div>
        <div class="label">Email:</div>
        <div class="value">{{ $user->email }}</div>
    </div>

    
    <div>
        <div class="label">Created Date:</div>
        <div class="value">{{ $user->created_at }}</div>
    </div>
    <div>
        <figure class="imagecheck-figure">
              <img
                src="{{ asset('/storage/'.$user->image) }}"
                alt="title"
                class="imagecheck-image"
                style="height:130px; gap:20px; width:300px;"
              />
        </figure>
    </div>
    <div>
        <figure class="imagecheck-figure">
              <img
                src="{{ asset('../assets/img/examples/product4.jpg') }}"
                alt="title"
                class="imagecheck-image"
              />
        </figure>
    </div>
    <div>
    <figure class="imagecheck-figure">
              <img
                src="{{ asset('../assets/img/examples/example4.jpeg') }}"
                alt="title"
                class="imagecheck-image"
                style="height: 130px"
              />
        </figure>
    </div>
</div>

        </div>
    </div>

    <div class="btn-container"> 
        <a href="{{ route('profile.edit') }}" class="btn btn-edit">Edit</a>
    </div> 
</div>

<script>
    function uploadImage() {
        let fileInput = document.getElementById('imageUpload');
        let file = fileInput.files[0];
        let formData = new FormData();
        formData.append('image', file);
        formData.append('_token', '{{ csrf_token() }}');

        fetch("{{ route('profile.updateImage') }}", {
            method: 'POST',
            body: formData,
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                document.getElementById('profileImage').src = data.image_url;
                alert("Image updated successfully!");
            } else {
                alert("Image upload failed!");
            }
        })
        .catch(error => console.error('Error:', error));
    }
</script>

@endsection
