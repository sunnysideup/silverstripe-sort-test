<% include SideBar %>
<div class="content-container unit size3of4 lastUnit">
    $Form

    <hr /><hr /><hr /><hr /><hr /><hr />
    <p>
        What you may see here that some items show up twice on separate pages (see pagination below).
        While other items do not show up at all.
    </p>
    <p>
        You can see the same thing happening <a href="http://modeladmintest.localhost/admin/test/MyDataObject">in modeladmin</a>.
    </p>
    <p>
        The easiest way is to CTRL+F for an item on two separate pages. It may take a few goes, but then you will find an entry
        that is listed on separate pages.
        In total there are 46 items, so will also find that some items are never listed at all.
    </p>
    <p>
        Please visit <a href="https://github.com/silverstripe/silverstripe-framework/issues/7249">the original issue</a> for more information.
    </p>

    <hr /><hr /><hr /><hr /><hr /><hr />

<%--

    <h1>Paginated Pages</h1>
    <% loop PaginatedPages %>
        <li>$Title ($Sort)</li>
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

--%>



    <ul>
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

<hr /><hr /><hr /><hr /><hr /><hr />
<%--
    <ul>
        <h1>Paginated Objects</h1>
    <% loop $PaginatedObjectsSortedByCreated %>
        <li>$Title</li>
    <% end_loop %>
    </ul>

    <% if $PaginatedObjectsSortedByCreated.MoreThanOnePage %>
        <% loop $PaginatedObjectsSortedByCreated.Pages %>
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

--%>

</div>
