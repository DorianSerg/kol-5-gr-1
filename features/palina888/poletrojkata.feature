Feature: Obliczenia

  Scenario: Poletrojkata a * b * 0.5
    Given I am on homepage
    When I follow "Kalkulator by palina888"
    And I fill in "a" with "4"
    And I fill in "b" with "4"
    And I press "Oblicz"
    Then I should see "Wynik wynosi 8"