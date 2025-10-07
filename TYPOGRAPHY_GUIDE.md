# Typography System Guide - TP-PKK Kabupaten Bangkalan

## Clean Sans-Serif Typography Overview

This website uses a clean, professional typography system with **Inter** as both the primary and heading font for consistency and readability.

### Font Families
- **Primary Font**: Inter (clean, modern sans-serif)
- **Heading Font**: Inter (same font, bold weights for hierarchy)

### Typography Classes

#### Display & Headlines
- `.text-display` - Largest heading (2.25rem, 800 weight) - Use for hero titles
- `.text-headline` - Large heading (1.875rem, 700 weight) - Use for page titles
- `.text-title` - Section heading (1.5rem, 600 weight) - Use for section titles
- `.text-subtitle` - Subsection heading (1.125rem, 600 weight) - Use for subsections

#### Body Text
- `.text-body-large` - Large body text (1.125rem) - Use for important content
- `.text-body` - Standard body text (1rem) - Use for regular content
- `.text-caption` - Small text (0.875rem, 500 weight) - Use for captions, labels
- `.text-overline` - Tiny uppercase text (0.75rem, 700 weight) - Use for overlines, tags

### Usage Examples

```blade
<!-- Hero Section -->
<h1 class="text-display gradient-text font-heading">Selamat Datang</h1>
<h2 class="text-title text-gray-600 font-heading">Kabupaten Bangkalan</h2>
<p class="text-body-large text-gray-700">Important description text...</p>

<!-- Section Headers -->
<h2 class="text-headline gradient-text font-heading">Berita Terkini</h2>
<h3 class="text-title font-heading">Program Unggulan</h3>
<h4 class="text-subtitle">Kegiatan Terkini</h4>

<!-- Body Content -->
<p class="text-body">Regular paragraph content goes here...</p>
<span class="text-caption text-gray-600">Photo caption or metadata</span>
<span class="text-overline text-gray-500">KATEGORI</span>

<!-- Navigation -->
<a class="text-body">Menu Item</a>
<span class="text-caption">Dropdown item</span>
```

### Design Principles

1. **Clarity**: Clean sans-serif typography for maximum readability
2. **Consistency**: Single font family (Inter) with weight variations for hierarchy
3. **Simplicity**: Reduced font sizes for more balanced, less exaggerated appearance
4. **Professionalism**: Modern, trustworthy look suitable for government/organization sites
5. **Accessibility**: Excellent readability across all devices and screen sizes

### Color Usage with Typography

- **Primary Text**: `text-gray-700` for body content
- **Secondary Text**: `text-gray-600` for subtitles
- **Muted Text**: `text-gray-500` for captions
- **Accent Text**: `gradient-text` class for special headings
- **Interactive Text**: `text-pink-600` / `text-purple-600` for links

### Responsive Behavior

The typography system is designed to be responsive:
- Moderate font sizes that work well on all devices
- Optimized line heights for readability
- Proper letter spacing for each font weight
- Mobile-first approach ensures good readability on small screens

### Implementation Notes

- All typography classes are defined in `resources/views/components/layout/app.blade.php`
- CSS custom properties are used for consistency
- Google Fonts (Inter) preloaded for optimal performance
- Simplified system with single font family reduces load time
- Clean, professional appearance suitable for official presentations