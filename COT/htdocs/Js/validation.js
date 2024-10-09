const validate = new JustValidate("#signup");

validate
  .addField("#name", [
    {
      rule: "required",
      errorMessage: "Name is required",
    },
  ])
  .addField("#email", [
    {
      rule: "required",
      errorMessage: "Email is required",
    },
    {
      rule: "email",
      errorMessage: "Email is invalid",
    },
  ])
  .addField("#password", [
    {
      rule: "required",
      errorMessage: "Password is required",
    },
    {
      rule: "password",
      errorMessage: "Password must be at least 8 characters long",
    },
  ])
  .addField("#password_confirmation", [
    {
      rule: "required",
      errorMessage: "Password confirmation is required",
    },
    {
      validator: (value, fields) => {
        return value === fields["#password"].elem.value;
      },
      errorMessage: "Passwords do not match",
    },
  ]);
