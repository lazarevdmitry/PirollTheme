<form action="/admin/projects/" method="post">
  Name: <input type="text" name="project_name" required />
  Image: <input type="file" name="project_image"   />
  Header: <input type="text" name="project_header" required />
  Content: <input type="text" name="project_content" required />
  Client Name: <input type="text" name="project_client_name" required />
  Client Date: <input type="date" name="project_client_date" required />
  <input type="hidden" name="add_new_project" value="true"/>
  <input type="submit" value="Сохранить проект"/>
</form>
