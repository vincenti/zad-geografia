Feature: Fikstury dla tabeli unemployment

  Scenario: Lista fixtur z tabeli unemployment
    Given I am on "unemployment.html"
     Then I should see "Zimbabwe"
      And I should see "95"
     Then I should see "Turkmenistan"
      And I should see "70"
     Then I should see "Poland"
      And I should see "10"

