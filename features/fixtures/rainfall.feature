Feature: Fikstury dla tabeli rainfall

  Scenario: Lista fixtur z tabeli rainfall
    Given I am on "rainfall.html"
     Then I should see "Rzeszow"
      And I should see "500"
     Then I should see "Lublin"
      And I should see "640"
     Then I should see "Warszawa"
      And I should see "480"