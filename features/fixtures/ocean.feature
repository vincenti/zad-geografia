Feature: Fikstury dla tabeli ocean

  Scenario: Lista fixtur z tabeli ocean
    Given I am on "ocean.html"
     Then I should see "the Pacific"
      And I should see "1234"
     Then I should see "the Atlantic"
      And I should see "5678"
     Then I should see "the Arctic"
      And I should see "91011"