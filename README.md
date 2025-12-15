# T&T Education SkillUp Website

## Overview
Complete website for T&T Education SkillUp - English language training center specializing in 4 Skills development and IELTS preparation.

## Features
- **Semi-static PHP architecture** with includes system
- **Responsive design** with mobile-first approach
- **Brand system** implementation (Blue #0D2396, Orange #F76010)
- **Vietnamese content** throughout
- **SEO optimized** with meta tags and semantic HTML
- **Interactive components** (carousels, sliders, forms)
- **Modern UI/UX** with custom CSS framework

## Technology Stack
- **Backend**: PHP 8.0+
- **Frontend**: HTML5, CSS3, JavaScript (ES6+)
- **Fonts**: Poppins (headings), Segoe UI (body)
- **Icons**: Font Awesome 6.4.0
- **Architecture**: Semi-static with includes, no database required

## Project Structure
```
tnteduweb/
├── config/
│   └── config.php              # Site configuration
├── includes/
│   ├── header.php              # HTML head
│   ├── navbar.php              # Navigation bar
│   ├── footer.php              # Footer
│   └── cta-form.php            # CTA section
├── assets/
│   ├── css/
│   │   └── style.css           # Main stylesheet (800+ lines)
│   ├── js/
│   │   └── main.js             # JavaScript functionality
│   └── images/                 # Image assets
├── index.php                   # Homepage
├── gioi-thieu/
│   └── index.php               # About page
├── khoa-hoc/
│   ├── index.php               # Courses overview
│   ├── 4-ky-nang/
│   │   └── index.php           # 4 Skills course detail
│   └── ielts/
│       └── index.php           # IELTS course detail
├── goc-ba-me/
│   ├── phan-hoi/
│   │   └── index.php           # Parent testimonials
│   └── thanh-tich-hoc-vien/
│       └── index.php           # Student achievements
├── blog/
│   └── index.php               # Blog listing
├── lien-he/
│   └── index.php               # Contact page
└── README.md                   # This file
```

## Pages Overview

### Homepage (`index.php`)
- Hero carousel with 3 slides
- Course highlights (4 Skills + IELTS)
- Why Choose Us section (6 benefits)
- Teacher slider (5 teachers)
- Testimonials (4 reviews)
- Statistics (4 metrics)
- Blog preview (3 posts)
- CTA form

### About (`gioi-thieu/index.php`)
- Company story
- Mission & vision
- Core values (6 items)
- Teacher directory (6 teachers with details)
- Facilities (4 highlights)

### Courses Overview (`khoa-hoc/index.php`)
- 2 main courses overview
- Learning methodology (4 points)
- Flexible schedule (3 time slots)
- Pricing overview
- FAQ section

### 4 Skills Course (`khoa-hoc/4-ky-nang/index.php`)
- Course overview
- 4 skills breakdown (Listening, Speaking, Reading, Writing)
- Curriculum (6 levels A1-C1)
- Testimonials

### IELTS Course (`khoa-hoc/ielts/index.php`)
- 3 learning tracks (5.5, 6.5-7.0, 7.5-8.0+)
- 4 skills strategies
- Output commitment
- Success stories (3 students)

### Parent Testimonials (`goc-ba-me/phan-hoi/index.php`)
- Statistics (4 metrics)
- 6 detailed testimonials with ratings
- Video testimonials section
- Write review CTA

### Student Achievements (`goc-ba-me/thanh-tich-hoc-vien/index.php`)
- Achievement statistics
- IELTS 8.0+ hall of fame (6 students)
- Success stories (3 detailed stories)
- Photo gallery (8 images)

### Blog (`blog/index.php`)
- Featured post
- Category filter
- 6 blog posts grid
- Pagination
- Newsletter signup

### Contact (`lien-he/index.php`)
- Contact form with validation
- Contact information
- Google Maps integration
- Multiple branch locations
- Social media links

## Design System

### Colors
- **Primary Blue**: #0D2396
- **Primary Orange**: #F76010
- **Secondary Oranges**: #A64B17, #FE9702
- **Neutrals**: #F1F1F1 (light grey), #E1E4EC (border), #1F1F1F (dark text), #4F4F4F (muted text)
- **Text**: #1F1F1F (primary), #4F4F4F (muted)

### Typography
- **Headings**: Poppins (400, 500, 600, 700)
- **Body**: Segoe UI (400, 600)
- **Icons**: Font Awesome 6.4.0

### Spacing
- Small: 16px
- Medium: 24px
- Large: 40px
- XL: 60px

### Shadows
- Small: 0 2px 8px rgba(13, 35, 150, 0.08)
- Medium: 0 4px 12px rgba(13, 35, 150, 0.12)
- Large: 0 8px 24px rgba(13, 35, 150, 0.15)

### Border Radius
- Small: 10px
- Medium: 20px
- Large: 28px

### Breakpoints
- Desktop: > 768px
- Tablet: ≤ 768px
- Mobile: ≤ 480px

## JavaScript Features
- Mobile navigation toggle
- Hero carousel auto-play (5s interval)
- Smooth scroll for anchor links
- Form validation (email, phone patterns)
- Scroll-to-top button
- Lazy loading images (IntersectionObserver)
- Animate-on-scroll (fade-in effects)
- Horizontal slider drag support
- Newsletter form handling

## Installation

### Requirements
- PHP 8.0 or higher
- Web server (Apache/Nginx)
- No database required

### Setup
1. Extract files to web server root (e.g., `htdocs/tnteduweb`)
2. Update `config/config.php` with correct paths if needed
3. Ensure write permissions for any upload directories (if implemented)
4. Access via browser: `http://localhost/tnteduweb/`

### Configuration
Edit `config/config.php` to update:
- `BASE_PATH` - Adjust for your deployment path
- Site constants (name, tagline, contact info)
- Social media URLs

## Browser Support
- Chrome (latest)
- Firefox (latest)
- Safari (latest)
- Edge (latest)
- Mobile browsers (iOS Safari, Chrome Mobile)

## Performance Optimizations
- CSS minification ready
- JavaScript deferred loading
- Image lazy loading
- Google Fonts preconnect
- Optimized asset paths

## SEO Features
- Semantic HTML5 structure
- Dynamic meta tags per page
- Open Graph protocol
- Vietnamese slugs/URLs
- Alt text for images
- Structured heading hierarchy

## Security Considerations
- Input validation on forms
- XSS prevention (htmlspecialchars in PHP)
- CSRF token implementation recommended
- SQL injection prevention (when database added)
- Sanitized user inputs

## Future Enhancements
- Database integration for dynamic content
- Admin panel for content management
- Student login portal
- Online course enrollment
- Payment gateway integration
- Multi-language support (English version)
- Blog post detail pages
- Advanced search functionality

## Contact Information
- **Hotline**: 090 123 4567
- **Email**: contact@tnteducation.vn
- **Address**: 123 Lê Văn Sỹ, Q.3, TP.HCM
- **Website**: www.tnteducation.vn

## Credits
- **Design & Development**: T&T Education Team
- **Fonts**: Google Fonts (Poppins)
- **Icons**: Font Awesome 6.4.0
- **Year**: 2024

## License
Proprietary - All rights reserved by T&T Education SkillUp

## Version
1.0.0 - Initial Release (January 2024)
