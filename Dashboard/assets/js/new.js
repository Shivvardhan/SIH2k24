document.addEventListener("DOMContentLoaded", function() {
    // Get all navigation links in the sidebar
    var navLinks = document.querySelectorAll('.sidebar-wrapper .nav li a');
    
    // Get the current URL (without query parameters)
    var currentPage = window.location.pathname.split('/').pop();
    

    // Exception: Set specific active link for certain pages
    if (currentPage === "matchingResult.php" || currentPage === "expertsPanel.php") {
        
        // Manually activate a specific link for matchingResult page
        var exceptionLink = document.querySelector('.nav li a[href="expertMatching.php"]');
        
        if (exceptionLink) {  // Ensure the element is found before adding the class
            // Remove active class from any other links
            document.querySelectorAll('.nav li').forEach(function(item) {
                item.classList.remove('active');
            });
            
            exceptionLink.parentElement.classList.add('active');
        } else {
            console.error("Exception link not found."); // Debug: Error handling
        }
        
        return;  // Exit the function after setting the manual exception
    }

    // Loop through each link and set active class if href matches current page
    navLinks.forEach(function(link) {
        var linkPage = link.getAttribute('href').split('/').pop();

        // Only add the active class if the href matches the current page
        if (linkPage === currentPage) {
            // Remove active class from any other links
            document.querySelectorAll('.nav li').forEach(function(item) {
                item.classList.remove('active');
            });

            // Add active class to the parent list item
            link.parentElement.classList.add('active');
        }
    });

    // If no links match and currentPage is empty (e.g., default page), handle Dashboard
    if (!document.querySelector('.nav li.active') && currentPage === '') {
        var dashboardLink = document.querySelector('.nav li a[href="dashboard.php"]');
        if (dashboardLink) {
            dashboardLink.parentElement.classList.add('active');
        }
    }
});
