<style type="text/css">
.text-primary {
    color: {{ Helper::GeneralSiteSettings("style_color1") }} !important;
}

.primary, .nav-active-primary .nav-link.active {
    background-color: {{ Helper::GeneralSiteSettings("style_color1") }} !important;
}

.nav-active-primary .nav > li.active > a {
    background-color: {{ Helper::GeneralSiteSettings("style_color1") }} !important;
}

.b-primary {
    border-color: {{ Helper::GeneralSiteSettings("style_color1") }} !important;
}
</style>
