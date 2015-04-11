Feature: Fikstury dla tabeli city

Scenario: Lista fixtur z tabeli city
  Given I am on "city.html"
    Then I should see "Tokyo"
    And I should see "7835"
    Then I should see "Mexico City"
    And I should see "1943"
    Then I should see "New York"
    And I should see "1425"