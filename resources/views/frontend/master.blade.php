<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fassionate</title>
    @vite('resources/css/app.css')

   
</head>

<body class="font-poppins bg-gray-100">





    <div class="loader">
        <div class=" z-[1000] h-screen w-full flex justify-center items-center ">

            <img src="{{asset('assets/logo/logo.webp')}}" alt="Logo" class="w-36 md:w-96">
        </div>
    </div>

    <div class="content">






      
      @include('frontend.body.nav')
      
      
        @yield('main')

        @include('frontend.body.footer')
    </div>
    
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <script>

        
    // Optional: Use JavaScript to control the loader's visibility
    const loader = document.querySelector('.loader');
    const content = document.querySelector('.content');
    // Assuming your content has an ID

    // Initial state
    loader.style.display = 'block';
    content.style.display = 'none';

    // Function to fade out the loader
    function fadeOutLoader() {
        let opacity = 1;

        const fadeInterval = setInterval(() => {
            opacity -= 0.1; // Adjust the value for faster or slower fade

            if (opacity <= 0) {
                opacity = 0;
                clearInterval(fadeInterval);
                loader.style.display = 'none';
                content.style.display = 'block'; // Show content after fade-out
            }

            loader.style.opacity = opacity;
        }, 55); // Adjust the interval for smoother animation (lower value for smoother)
    }

    // Start the fade-out animation after a delay
    window.onload = setTimeout(fadeOutLoader, 1000); // Adjust delay as needed



    

    
    </script>

<script>
$(document).ready(function() {
    $('#search-form').on('submit', function(e) {
        e.preventDefault();
        var query = $('#search-input').val();
        $('#debug-info').html('Sending request...');
        $.ajax({
            url: '{{ route('search') }}',
            method: 'GET',
            data: { query: query },
            dataType: 'json',  // Explicitly tell jQuery to expect JSON
            success: function(data) {
                if (data.error) {
                    $('#debug-info').html('Error: ' + data.error);
                    $('#search-results').html('<div class="p-4 border-b border-gray-200">An error occurred while searching</div>').removeClass('hidden');
                } else {
                    $('#debug-info').html('Request successful. Received ' + data.length + ' results.');
                    var resultsHtml = '';
                    if (data.length === 0) {
                        resultsHtml = '<div class="p-4 border-b border-gray-200">No results found</div>';
                    } else {
                        data.forEach(function(product) {
                            resultsHtml += '<div class="p-4 border-b border-gray-200">' +
                                '<h3 class="font-bold">' + product.name + '</h3>' +
                                '<p class="text-sm text-gray-600">' + product.description + '</p>' +
                                '<p class="text-sm"><span class="font-semibold">Category:</span> ' + product.category + '</p>' +
                                '<p class="text-sm"><span class="font-semibold">Price:</span> $' + product.price + '</p>' +
                                '</div>';
                        });
                    }
                    $('#search-results').html(resultsHtml).removeClass('hidden');
                }
            },
            error: function(xhr, status, error) {
                var errorMessage = 'An error occurred while searching';
                try {
                    var response = JSON.parse(xhr.responseText);
                    if (response.error) {
                        errorMessage = response.error;
                    }
                } catch (e) {
                    console.error("Error parsing error response:", e);
                }
                $('#debug-info').html('Error: ' + status + ' - ' + error + '<br>Details: ' + errorMessage);
                console.error("AJAX Error:", xhr.responseText);
                $('#search-results').html('<div class="p-4 border-b border-gray-200">' + errorMessage + '</div>').removeClass('hidden');
            }
        });
    });

    // Close the floating card when clicking outside
    $(document).on('click', function(e) {
        if (!$(e.target).closest('.relative').length) {
            $('#search-results').addClass('hidden');
        }
    });
});
</script>
 

</body>

</html>