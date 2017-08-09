<% include SideBar %>
<div class="content-container unit size3of4 lastUnit">
    <article>
        <h1>$Title</h1>
        <div class="content">$Content</div>
    </article>
        $Form
        $CommentsForm

    <h1>Paginated Pages</h1>
    <% loop PaginatedPages %>
        <li>$Title</li>
    <% end_loop %>

    <% if $PaginatedPages.MoreThanOnePage %>
        <% loop $PaginatedPages.Pages %>
            <% if $CurrentBool %>
                $PageNum
            <% else %>
                <% if $Link %>
                    <a href="$Link">$PageNum</a>
                <% else %>
                    ...
                <% end_if %>
            <% end_if %>
            <% end_loop %>
    <% end_if %>
    <% if $PaginatedPages.MoreThanOnePage %>
        <% loop $PaginatedPages.Pages %>
            <% if $CurrentBool %>
                    $PageNum
            <% else %>
                <% if $Link %>
                <a href="$Link">$PageNum</a>
                <% else %>
                ...
                <% end_if %>
            <% end_if %>
        <% end_loop %>
    <% end_if %>
    <ul>
        <hr /><hr /><hr /><hr /><hr /><hr />

        <h1>Paginated Objects</h1>
    <% loop $PaginatedObjects %>
        <li>$Title</li>
    <% end_loop %>
    </ul>

    <% if $PaginatedObjects.MoreThanOnePage %>
        <% loop $PaginatedObjects.Pages %>
            <% if $CurrentBool %>
                    $PageNum
            <% else %>
                <% if $Link %>
                <a href="$Link">$PageNum</a>
                <% else %>
                ...
                <% end_if %>
            <% end_if %>
        <% end_loop %>
    <% end_if %>


</div>
