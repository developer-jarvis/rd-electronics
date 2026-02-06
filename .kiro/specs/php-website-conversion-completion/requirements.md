# Requirements Document

## Introduction

This specification defines the requirements for completing the PHP conversion of the RD Electronics website. The website was originally built using .NET/ASP.NET MVC and has been partially migrated to PHP. The conversion requires creating helper functions, replacing all ASP.NET Razor syntax with PHP equivalents, fixing asset paths, and ensuring all pages are complete and functional.

## Glossary

- **Helper_Function**: A PHP utility function that provides common functionality across the application (e.g., asset(), url())
- **Asset_Path**: The file system path to static resources (CSS, JavaScript, images) relative to the web root
- **Razor_Syntax**: ASP.NET MVC view syntax using @ symbols (e.g., @Url.Action(), ~/paths)
- **PHP_Include**: PHP file inclusion mechanism using include_once or require_once
- **Base_URL**: The root URL of the website used for generating absolute URLs
- **Service_Page**: Individual PHP pages describing specific services offered by RD Electronics
- **Common_Include**: Shared PHP files (head.php, header.php, footer.php) included across all pages
- **Navigation_Link**: Hyperlinks in the header/footer that allow users to navigate between pages
- **Page_Variable**: PHP variables used to pass data to included templates (e.g., $page_title, $current_page)

## Requirements

### Requirement 1: Create PHP Helper Functions

**User Story:** As a developer, I want centralized helper functions for path management, so that all pages can consistently generate URLs and asset paths.

#### Acceptance Criteria

1. THE System SHALL provide an asset() function that generates correct paths to static resources
2. THE System SHALL provide a url() function that generates correct paths to PHP pages
3. WHEN the asset() function is called with a relative path, THE System SHALL return the correct absolute or root-relative path to the asset
4. WHEN the url() function is called with a page name, THE System SHALL return the correct URL path to that page
5. THE System SHALL define these helper functions in a single file that can be included by all pages
6. THE System SHALL ensure helper functions work correctly from both root-level pages and subdirectory pages (e.g., services/)

### Requirement 2: Replace ASP.NET Razor Syntax

**User Story:** As a developer, I want all ASP.NET Razor syntax replaced with PHP equivalents, so that the website functions correctly as a PHP application.

#### Acceptance Criteria

1. WHEN a page contains @Url.Action() syntax, THE System SHALL replace it with equivalent PHP url() function calls
2. WHEN a page contains ~/ path prefixes, THE System SHALL replace them with proper PHP asset() or url() function calls
3. WHEN a page contains Razor conditional syntax, THE System SHALL replace it with PHP conditional syntax
4. THE System SHALL ensure all navigation links use PHP helper functions instead of Razor syntax
5. THE System SHALL ensure all image sources use PHP helper functions instead of Razor syntax
6. THE System SHALL ensure all CSS and JavaScript references use PHP helper functions instead of Razor syntax

### Requirement 3: Fix Asset Paths

**User Story:** As a user, I want all images, CSS, and JavaScript files to load correctly, so that the website displays and functions properly.

#### Acceptance Criteria

1. WHEN a page is loaded, THE System SHALL serve all CSS files from the correct paths
2. WHEN a page is loaded, THE System SHALL serve all JavaScript files from the correct paths
3. WHEN a page is loaded, THE System SHALL serve all image files from the correct paths
4. THE System SHALL ensure asset paths work correctly from root-level pages (e.g., index.php)
5. THE System SHALL ensure asset paths work correctly from subdirectory pages (e.g., services/cctv.php)
6. THE System SHALL handle relative path differences between root and subdirectory pages automatically

### Requirement 4: Fix Navigation Links

**User Story:** As a user, I want all navigation links to work correctly, so that I can browse the website without encountering broken links.

#### Acceptance Criteria

1. WHEN a user clicks a navigation link in the header, THE System SHALL navigate to the correct page
2. WHEN a user clicks a navigation link in the footer, THE System SHALL navigate to the correct page
3. WHEN a user clicks a breadcrumb link, THE System SHALL navigate to the correct page
4. THE System SHALL ensure navigation links work correctly from root-level pages
5. THE System SHALL ensure navigation links work correctly from subdirectory pages
6. THE System SHALL highlight the active page in the navigation menu based on the current page

### Requirement 5: Complete Service Pages

**User Story:** As a user, I want all service pages to be complete and properly formatted, so that I can read about all services offered.

#### Acceptance Criteria

1. WHEN a service page is incomplete or truncated, THE System SHALL complete the page content
2. THE System SHALL ensure all service pages follow a consistent structure and format
3. THE System SHALL ensure all service pages include proper PHP includes for head, header, and footer
4. THE System SHALL ensure all service pages use helper functions for paths and URLs
5. THE System SHALL ensure all service pages have proper breadcrumb navigation
6. THE System SHALL ensure all service pages have call-to-action buttons that work correctly

### Requirement 6: Implement Page Context Variables

**User Story:** As a developer, I want pages to pass context variables to common includes, so that headers and titles can be customized per page.

#### Acceptance Criteria

1. WHEN a page includes head.php, THE System SHALL allow the page to set $page_title variable
2. WHEN a page includes head.php, THE System SHALL allow the page to set $page_description variable
3. WHEN a page includes head.php, THE System SHALL allow the page to set $page_keywords variable
4. WHEN a page includes header.php, THE System SHALL allow the page to set $current_page variable for active menu highlighting
5. THE System SHALL provide default values for all page variables when not explicitly set
6. THE System SHALL ensure page variables are set before including common files

### Requirement 7: Ensure Cross-Browser Compatibility

**User Story:** As a user, I want the website to work correctly in all modern browsers, so that I can access it regardless of my browser choice.

#### Acceptance Criteria

1. THE System SHALL render correctly in Chrome, Firefox, Safari, and Edge browsers
2. THE System SHALL ensure all JavaScript functionality works across modern browsers
3. THE System SHALL ensure all CSS styles render consistently across modern browsers
4. THE System SHALL use standard PHP syntax compatible with PHP 7.4 and above
5. THE System SHALL avoid browser-specific code or provide appropriate fallbacks

### Requirement 8: Maintain Existing Design and Functionality

**User Story:** As a stakeholder, I want the converted website to maintain the exact same design and functionality as the original, so that users experience no disruption.

#### Acceptance Criteria

1. THE System SHALL preserve all visual design elements from the original website
2. THE System SHALL preserve all interactive functionality from the original website
3. THE System SHALL preserve all content from the original website
4. THE System SHALL ensure the carousel/slider functionality works correctly
5. THE System SHALL ensure dropdown menus work correctly
6. THE System SHALL ensure all forms function correctly (if present)
7. THE System SHALL ensure mobile responsiveness is maintained

### Requirement 9: Validate All Pages

**User Story:** As a developer, I want all pages validated for PHP syntax and functionality, so that the website is production-ready.

#### Acceptance Criteria

1. THE System SHALL ensure all PHP files have valid syntax with no parse errors
2. THE System SHALL ensure all helper functions are properly defined and accessible
3. THE System SHALL ensure all includes resolve correctly
4. THE System SHALL ensure no undefined function errors occur
5. THE System SHALL ensure no undefined variable warnings occur for critical variables
6. THE System SHALL test all pages load successfully without errors

### Requirement 10: Document Helper Functions

**User Story:** As a developer, I want helper functions documented, so that future maintainers understand how to use them.

#### Acceptance Criteria

1. THE System SHALL provide inline documentation for the asset() function
2. THE System SHALL provide inline documentation for the url() function
3. THE System SHALL document the expected parameters for each helper function
4. THE System SHALL document the return values for each helper function
5. THE System SHALL provide usage examples in the documentation
