Feature: Fikstury dla tabeli river

  Scenario: Lista fixtur z tabeli river
    Given I am on "rivers.html"
     Then I should see "The Nile"
      And I should see "1234"
     Then I should see "The Thames"
      And I should see "9876"
     Then I should see "Mississipi"
      And I should see "3434"

