Feature: Fikstury dla tabeli city

Scenario: Lista fixtur z tabeli channels
  Given I am on "channels.html"
    Then I should see "Intercoastal Waterway"
    And I should see "4600"
    Then I should see "Kanał Wołżańsko- Bałtycki"
    And I should see "1100"
    Then I should see "Kanał Śródlądowy"
    And I should see "321"